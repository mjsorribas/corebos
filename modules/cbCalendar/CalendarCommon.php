<?php
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/
include_once 'include/fields/DateTimeField.php';

/**
 * To get the lists of sharedids
 * @param integer The user id
 * @return array The shared users id
 */
function getSharedUserId($id) {
	global $adb;
	$sharedid = array();
	$result = $adb->pquery(
		'SELECT vtiger_users.*,vtiger_sharedcalendar.* from vtiger_sharedcalendar left join vtiger_users on vtiger_sharedcalendar.sharedid=vtiger_users.id where userid=?',
		array($id)
	);
	$rows = $adb->num_rows($result);
	for ($j=0; $j<$rows; $j++) {
		$id = $adb->query_result($result, $j, 'sharedid');
		$sharedname = getFullNameFromQResult($result, $j, 'Users');
		$sharedid[$id]=$sharedname;
	}
	return $sharedid;
}

/**
 * To get the lists of vtiger_users id who shared their calendar with specified user
 * @param integer The shared user id
 * @return string a comma seperated vtiger_users id
 */
function getSharedCalendarId($sharedid) {
	global $adb;
	$result = $adb->pquery('SELECT * from vtiger_sharedcalendar where sharedid=?', array($sharedid));
	$shared_ids = '';
	if ($adb->num_rows($result)!=0) {
		for ($j=0; $j<$adb->num_rows($result); $j++) {
			$userid[] = $adb->query_result($result, $j, 'userid');
		}
		$shared_ids = implode(',', $userid);
	}
	return $shared_ids;
}

/**
 * To get userid and username of all vtiger_users except the current user
 * @param integer The user id
 * @return array in the following format:
 * $user_details=Array($userid1=>$username, $userid2=>$username,............,$useridn=>$username);
 */
function getOtherUserName($id) {
	global $adb;
	$user_details=array();
	$result = $adb->pquery("select * from vtiger_users where deleted=0 and status='Active' and id!=? order by concat( first_name, ' ', last_name )", array($id));
	$num_rows=$adb->num_rows($result);
	for ($i=0; $i<$num_rows; $i++) {
		$userid=$adb->query_result($result, $i, 'id');
		$username = getFullNameFromQResult($result, $i, 'Users');
		$user_details[$userid]=$username;
	}
	return $user_details;
}

/**
 * To get userid and username of vtiger_users in hierarchy level
 * @param integer The user id
 * @return array in the following format:
 * $user_details=Array($userid1=>$username, $userid2=>$username,............,$useridn=>$username);
 */
function getSharingUserName($id) {
	global $adb,$current_user;
	$user_details=array();
	$assigned_user_id = $current_user->id;
	$userprivs = $current_user->getPrivileges();
	if (!$userprivs->hasGlobalWritePermission() && !$userprivs->hasModuleWriteSharing(getTabid('cbCalendar'))) {
		$role_seq = implode('::', $userprivs->getParentRoles());
		$query = "select id as id,user_name as user_name
			from vtiger_users
			where id=? and status='Active'
			union
			select vtiger_user2role.userid as id,vtiger_users.user_name as user_name
			from vtiger_user2role
			inner join vtiger_users on vtiger_users.id=vtiger_user2role.userid
			inner join vtiger_role on vtiger_role.roleid=vtiger_user2role.roleid
			where vtiger_role.parentrole like ? and status='Active'
			union
			select shareduserid as id,vtiger_users.user_name as user_name
			from vtiger_tmp_write_user_sharing_per
			inner join vtiger_users on vtiger_users.id=vtiger_tmp_write_user_sharing_per.shareduserid
			where status='Active' and vtiger_tmp_write_user_sharing_per.userid=? and vtiger_tmp_write_user_sharing_per.tabid=9";
		$params = array($current_user->id, $role_seq."::%", $current_user->id);
		if (!empty($assigned_user_id)) {
			$query .= ' OR id=?';
			$params[] = $assigned_user_id;
		}
		$query .= ' order by user_name ASC';
		$result = $adb->pquery($query, $params, true, 'Error filling in user array: ');
		while ($row = $adb->fetchByAssoc($result)) {
			$temp_result[$row['id']] = $row['user_name'];
		}
		$user_details = &$temp_result;
		unset($user_details[$id]);
	} else {
		$user_details = get_user_array(false, 'Active', $id);
		unset($user_details[$id]);
	}
	return $user_details;
}

/**
 * To get hour,minute and format
 * @param string The date&time
 * @param string The date&time
 * @param string The format
 * @return array
*/
function getaddEventPopupTime($starttime, $endtime, $format) {
	$timearr = array();
	list($sthr,$stmin) = explode(':', $starttime);
	list($edhr,$edmin) = (!empty($endtime) ? explode(':', $endtime) : array('23','0'));
	if ($format == '12' || $format == 'am/pm') {
		$hr = $sthr+0;
		$timearr['startfmt'] = ($hr >= 12) ? 'pm' : 'am';
		if ($hr == 0) {
			$hr = 12;
		}
		$timearr['starthour'] = twoDigit(($hr>12)?($hr-12):$hr);
		$timearr['startmin'] = $stmin;

		$edhr = $edhr+0;
		$timearr['endfmt'] = ($edhr >= 12) ? 'pm' : 'am';
		if ($edhr == 0) {
			$edhr = 12;
		}
		$timearr['endhour'] = twoDigit(($edhr>12)?($edhr-12):$edhr);
		$timearr['endmin'] = $edmin;
	} else { // if ($format == '24') {
		$timearr['starthour'] = twoDigit($sthr);
		$timearr['startmin'] = $stmin;
		$timearr['startfmt'] = '';
		$timearr['endhour'] = twoDigit($edhr);
		$timearr['endmin'] = $edmin;
		$timearr['endfmt'] = '';
	}
	return $timearr;
}

/**
 * To construct time select combo box
 * @param string the format
 * @param string The mode
 * @return string html select combo box for time selection
 */
function getTimeCombo($format, $bimode, $hour = '', $min = '', $fmt = '', $todocheck = false) {
	global $mod_strings;
	$combo = '';
	$min = $min - ($min%5);
	if ($bimode == 'start' && !$todocheck) {
		$jsfn = 'onChange="changeEndtime_StartTime(document.EditView.activitytype.value);"';
	} else {
		$jsfn = null;
	}
	if ($format == 'am/pm') {
		$combo .= '<select class=small name="'.$bimode.'hr" id="'.$bimode.'hr" '.$jsfn.'>';
		for ($i=0; $i<12; $i++) {
			if ($i == 0) {
				$hrtext= 12;
				$hrvalue = 12;
			} else {
				$hrvalue = $hrtext = twoDigit($i);
			}
			$hrsel = ($hour == $hrvalue)?'selected':'';
			$combo .= '<option value="'.$hrvalue.'" '.$hrsel.'>'.$hrtext.'</option>';
		}
		$combo .= '</select>&nbsp;';
		$combo .= '<select name="'.$bimode.'min" id="'.$bimode.'min" class=small '.$jsfn.'>';
		for ($i=0; $i<12; $i++) {
			$value = $i*5;
			$value = twoDigit($value);
			$minsel = ($min == $value)?'selected':'';
			$combo .= '<option value="'.$value.'" '.$minsel.'>'.$value.'</option>';
		}
		$combo .= '</select>&nbsp;';
		$combo .= '<select name="'.$bimode.'fmt" id="'.$bimode.'fmt" class=small '.$jsfn.'>';
		$amselected = ($fmt == 'am')?'selected':'';
		$pmselected = ($fmt == 'pm')?'selected':'';
		$combo .= '<option value="am" '.$amselected.'>AM</option>';
		$combo .= '<option value="pm" '.$pmselected.'>PM</option>';
		$combo .= '</select>';
	} else {
		$combo .= '<select name="'.$bimode.'hr" id="'.$bimode.'hr" class=small '.$jsfn.'>';
		for ($i=0; $i<=23; $i++) {
			$hrvalue = twoDigit($i);
			$hrsel = ($hour == $hrvalue)?'selected':'';
			$combo .= '<option value="'.$hrvalue.'" '.$hrsel.'>'.$hrvalue.'</option>';
		}
		$combo .= '</select>'.$mod_strings['LBL_HR'].'&nbsp;';
		$combo .= '<select name="'.$bimode.'min" id="'.$bimode.'min" class=small '.$jsfn.'>';
		for ($i=0; $i<12; $i++) {
			$value = $i*5;
			$value= twoDigit($value);
			$minsel = ($min == $value)?'selected':'';
			$combo .= '<option value="'.$value.'" '.$minsel.'>'.$value.'</option>';
		}
		$combo .= '</select>&nbsp;'.$mod_strings['LBL_MIN'].'<input type="hidden" name="'.$bimode.'fmt" id="'.$bimode.'fmt">';
	}
	return $combo;
}

/**
 * Function to construct HTML select combo box
 * @param string the field name
 * @param string The table name
 * @return string html select combo box for combo field
 */
function getActFieldCombo($fieldname, $tablename, $follow_activitytype = false) {
	global $adb, $current_user;
	$combo = '';
	$js_fn = '';
	if ($fieldname == 'eventstatus') {
		$js_fn = 'onChange = "getSelectedStatus();"';
	}
	if ($follow_activitytype) {
		$combo .= '<select name="follow_'.$fieldname.'" id="follow_'.$fieldname.'" class=small '.$js_fn.'>';
	} else {
		$combo .= '<select name="'.$fieldname.'" id="'.$fieldname.'" class=small '.$js_fn.'>';
	}
	if (is_admin($current_user)) {
		$q = 'select * from '.$tablename;
	} else {
		$roleid=$current_user->roleid;
		$subrole = getRoleSubordinates($roleid);
		if (count($subrole)> 0) {
			$roleids = $subrole;
			$roleids[] = $roleid;
		} else {
			$roleids = $roleid;
		}

		if (count($roleids) > 1) {
			$q="select distinct $fieldname
				from $tablename
				inner join vtiger_role2picklist on vtiger_role2picklist.picklistvalueid = $tablename.picklist_valueid
				where roleid in ('". implode('","', $roleids) ."') and picklistid in (select picklistid from $tablename) order by sortid asc";
		} else {
			$q="select distinct $fieldname
				from $tablename
				inner join vtiger_role2picklist on vtiger_role2picklist.picklistvalueid = $tablename.picklist_valueid
				where roleid ='".$roleid."' and picklistid in (select picklistid from $tablename) order by sortid asc";
		}
	}
	$Res = $adb->query($q);
	$noofrows = $adb->num_rows($Res);
	for ($i = 0; $i < $noofrows; $i++) {
		$value = $adb->query_result($Res, $i, $fieldname);
		$combo .= '<option value="'.$value.'">'.getTranslatedString($value).'</option>';
	}
	$combo .= '</select>';
	return $combo;
}

/**
 * Function to get the vtiger_activity details for mail body
 * @param string activity description
 * @param string to differenciate from notification to invitation.
 * @return string HTML in string format
 */
function getActivityDetails($description, $user_id, $from = '') {
	global $log, $current_user, $current_language;
	require_once 'include/utils/utils.php';
	$mod_strings = return_module_language($current_language, 'cbCalendar');
	$log->debug('> getActivityDetails');
	$updated = $mod_strings['LBL_UPDATED'];
	$created = $mod_strings['LBL_CREATED'];
	$reply = (($description['mode'] == 'edit') ? $updated : $created);
	if ($description['activity_mode'] == 'Events') {
		$end_date_lable=$mod_strings['End date and time'];
	} else {
		$end_date_lable=$mod_strings['Due Date'];
	}

	$name = getUserFullName($user_id);
	$inviteuser = new Users();
	$inviteuser->retrieveCurrentUserInfoFromFile($user_id);
	$stdatetime = new DateTimeField($description['st_date_time']);
	$etdatetime = new DateTimeField($description['end_date_time']);

	if ($from == 'invite') {
		$msg = getTranslatedString($mod_strings['LBL_ACTIVITY_INVITATION']);
	} else {
		$msg = getTranslatedString($mod_strings['LBL_ACTIVITY_NOTIFICATION']);
	}

	$current_username = getUserFullName($current_user->id);
	$status = getTranslatedString($description['status'], 'cbCalendar');
	$list = $name.',';
	$list .= '<br><br>'.$msg.' '.$reply.'.<br> '.$mod_strings['LBL_DETAILS_STRING'].':<br>';
	$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mod_strings['LBL_SUBJECT'].' : '.$description['subject'];
	$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mod_strings['Start date and time'].' : '.$stdatetime->getDisplayDateTimeValue($inviteuser) .' '.$inviteuser->column_fields['time_zone'];
	$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$end_date_lable.' : '.$etdatetime->getDisplayDateTimeValue($inviteuser).' '.$inviteuser->column_fields['time_zone'];
	$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mod_strings['LBL_STATUS'].': '.$status;
	$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mod_strings['Priority'].': '.getTranslatedString($description['taskpriority']);
	$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mod_strings['Related To'].': '.$description['relatedto'];
	if (!empty($description['contact_name'])) {
		$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mod_strings['LBL_CONTACT_LIST'].' '.$description['contact_name'];
	} else {
		$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mod_strings['Location'].' : '.$description['location'];
	}
	$list .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mod_strings['LBL_APP_DESCRIPTION'].': '.$description['description'];
	$list .= '<br><br>'.$mod_strings['LBL_REGARDS_STRING'].' ,';
	$list .= '<br>'.$current_username.'.';

	$log->debug('< getActivityDetails');
	return $list;
}

function twoDigit($no) {
	return DateTimeField::twoDigit($no);
}

function timeString($datetime, $fmt) {
	if (is_object($datetime)) {
		$dateStr = (isset($datetime->year) ? $datetime->year : date('Y')) . '-';
		$dateStr.= (isset($datetime->month) ? twoDigit($datetime->month) : twoDigit(date('m'))) . '-';
		$dateStr.= (isset($datetime->day) ? twoDigit($datetime->day) : twoDigit(date('d')));
	} else {
		$dateStr = (isset($datetime['year']) ? $datetime['year'] : date('Y')) . '-';
		$dateStr.= (isset($datetime['month']) ? twoDigit($datetime['month']) : twoDigit(date('m'))) . '-';
		$dateStr.= (isset($datetime['day']) ? twoDigit($datetime['day']) : twoDigit(date('d')));
	}
	$timeStr = formatUserTimeString($datetime, $fmt);
	$date = new DateTimeField($dateStr.' '.$timeStr);
	list($h, $m) = explode(':', $date->getDisplayTime());
	return formatUserTimeString(array('hour'=>$h, 'minute'=>$m), $fmt);
}

/**
 *
 * @param mixed date/time
 * @param string type 'am/pm'
 * @return string Date
 */
function formatUserTimeString($datetime, $fmt) {
	if (is_object($datetime)) {
		$hr = $datetime->hour;
		$min = $datetime->minute;
	} else {
		$hr = $datetime['hour'];
		$min = $datetime['minute'];
	}
	$timeStr = '';
	if ($fmt != 'am/pm') {
		$timeStr .= twoDigit($hr).':'.twoDigit($min);
	} else {
		$am_pm = array('AM', 'PM');
		$hour = twoDigit($hr%12);
		if ($hour == 0) {
			$hour = 12;
		}
		$timeStr = $hour.':'.twoDigit($min).$am_pm[($hr/12)%2];
	}
	return $timeStr;
}

function getActivityMailInfo($return_id, $status, $activity_type) {
	global $adb, $current_user;
	$qg = new QueryGenerator('cbCalendar', $current_user);
	$qg->setFields(array('*'));
	$ary_res = $adb->pquery($qg->getQuery(), array($return_id));
	$send_notification = $adb->query_result($ary_res, 0, 'sendnotification');
	$subject = $adb->query_result($ary_res, 0, 'subject');
	$priority = $adb->query_result($ary_res, 0, 'priority');
	$st_date = $adb->query_result($ary_res, 0, 'date_start');
	$st_time = $adb->query_result($ary_res, 0, 'time_start');
	$end_date = $adb->query_result($ary_res, 0, 'due_date');
	$end_time = $adb->query_result($ary_res, 0, 'time_end');
	$location = $adb->query_result($ary_res, 0, 'location');
	$owner_id = $adb->query_result($ary_res, 0, 'smownerid');
	$description = $adb->query_result($ary_res, 0, 'description');

	if (!empty($st_time)) {
		$date = new DateTimeField($st_date.' '.$st_time);
		$st_date = $date->getDisplayDate();
		$st_time = $date->getDisplayTime();
	}

	if (!empty($end_time)) {
		$date = new DateTimeField($end_date.' '.$end_time);
		$end_date = $date->getDisplayDate();
		$end_time = $date->getDisplayTime();
	}

	$usr_res = $adb->pquery('select count(*) as count from vtiger_users where id=?', array($owner_id));
	if ($adb->query_result($usr_res, 0, 'count')>0) {
		$assignType = 'U';
		$usr_id = $owner_id;
	} else {
		$assignType = 'T';
		$group_qry = 'select groupname from vtiger_groups where groupid=?';
		$grp_res = $adb->pquery($group_qry, array($owner_id));
		$grp_name = $adb->query_result($grp_res, 0, 'groupname');
	}

	$rel_res = $adb->pquery(
		"select case vtiger_crmobject.setype
			when 'Leads' then vtiger_leaddetails.lastname
			when 'Accounts' then vtiger_account.accountname
			when 'Potentials' then vtiger_potential.potentialname
			when 'Quotes' then vtiger_quotes.subject
			when 'PurchaseOrder' then vtiger_purchaseorder.subject
			when 'SalesOrder' then vtiger_salesorder.subject
			when 'Invoice' then vtiger_invoice.subject
			when 'Campaigns' then vtiger_campaign.campaignname
			when 'HelpDesk' then vtiger_troubletickets.title
			end as relname
		from vtiger_seactivityrel
		inner join vtiger_crmobject on vtiger_crmobject.crmid=vtiger_seactivityrel.crmid
		left join vtiger_leaddetails on vtiger_leaddetails.leadid = vtiger_seactivityrel.crmid
		left join vtiger_account on vtiger_account.accountid=vtiger_seactivityrel.crmid
		left join vtiger_potential on vtiger_potential.potentialid=vtiger_seactivityrel.crmid
		left join vtiger_quotes on vtiger_quotes.quoteid= vtiger_seactivityrel.crmid
		left join vtiger_purchaseorder on vtiger_purchaseorder.purchaseorderid = vtiger_seactivityrel.crmid
		left join vtiger_salesorder on vtiger_salesorder.salesorderid = vtiger_seactivityrel.crmid
		left join vtiger_invoice on vtiger_invoice.invoiceid = vtiger_seactivityrel.crmid
		left join vtiger_campaign on vtiger_campaign.campaignid = vtiger_seactivityrel.crmid
		left join vtiger_troubletickets on vtiger_troubletickets.ticketid = vtiger_seactivityrel.crmid
		where vtiger_seactivityrel.activityid=?",
		array($return_id)
	);
	$rel_name = $adb->query_result($rel_res, 0, 'relname');

	$relatedContacts = getActivityRelatedContacts($return_id);

	$mail_data = array();
	$mail_data['mode'] = 'edit';
	$mail_data['activity_mode'] = $activity_type;
	$mail_data['sendnotification'] = $send_notification;
	$mail_data['user_id'] = $usr_id;
	$mail_data['subject'] = $subject;
	$mail_data['status'] = $status;
	$mail_data['taskpriority'] = $priority;
	$mail_data['relatedto'] = $rel_name;
	$mail_data['contact_name'] = implode(',', $relatedContacts);
	$mail_data['description'] = $description;
	$mail_data['assign_type'] = $assignType;
	$mail_data['group_name'] = $grp_name;
	$value = getaddEventPopupTime($st_time, $end_time, '24');
	$start_hour = $value['starthour'].':'.$value['startmin'].''.$value['startfmt'];
	if ($activity_type != 'Task') {
		$end_hour = $value['endhour'] .':'.$value['endmin'].''.$value['endfmt'];
	}
	$date = new DateTimeField($st_date.' '.$start_hour);
	$endDate = new DateTimeField($end_date.' '.$end_hour);
	$mail_data['st_date_time'] = $date->getDBInsertDateTimeValue();
	$mail_data['end_date_time'] = $endDate->getDBInsertDateValue().' '.$endDate->getDBInsertTimeValue();
	$mail_data['location']=$location;
	return $mail_data;
}

// User Select Customization
/**
 * get the id of the User selected by current user in the picklist of the ListView or Calendar view
 * @return string Id of the user that the current user has selected
 */
function calendarview_getSelectedUserId() {
	global $current_user, $default_charset;
	if (empty($_REQUEST['onlyforuser'])) {
		return $current_user->id;
	}
	return htmlspecialchars(strip_tags($_REQUEST['onlyforuser']), ENT_QUOTES, $default_charset);
}

function calendarview_getSelectedUserFilterQuerySuffix() {
	global $current_user, $adb;
	$only_for_user = calendarview_getSelectedUserId();
	$qcondition = '';
	if (!empty($only_for_user) && $only_for_user != 'ALL') {
		$mod = CRMEntity::getInstance('cbCalendar');
		// For logged in user include the group records also.
		if ($only_for_user == $current_user->id) {
			$user_group_ids = fetchUserGroupids($current_user->id);
			// User does not belong to any group? Let us reset to non-existent group
			if (!empty($user_group_ids)) {
				$user_group_ids .= ',';
			} else {
				$user_group_ids = '';
			}
			$user_group_ids .= $current_user->id;
			$qcondition = ' AND '.$mod->crmentityTable.'.smownerid IN (' . $user_group_ids .')';
		} else {
			$qcondition = ' AND '.$mod->crmentityTable.'.smownerid = ' . $adb->sql_escape_string($only_for_user);
		}
	}
	return $qcondition;
}

/**
 * Function returns the data of the user selected by current user in the picklist of the ListView or Calendar view of Current User
 * @param integer The Id of the user that the Current User has selected in dropdown picklist in Calendar modules listview or Calendar View
 * @return string The array of the events for the user that the current user has selected
 */
function calendarview_getUserSelectOptions($useridInUse) {
	global $adb, $app_strings, $current_user, $mod_strings;
	$users = $adb->query("SELECT id,user_name FROM vtiger_users WHERE status = 'Active' and deleted = 0");
	$userscount = $adb->num_rows($users);

	$userSelectdata = "<span style='padding-left: 10px; padding-right: 10px;'><b>" . $app_strings['LBL_LIST_OF'] . ' : </b>';
	$userSelectdata .="<select class='small' onchange='fnRedirect();' name='onlyforuser'>";

	// Providing All option for administrators only
	if (is_admin($current_user)) {
		$userSelectdata .= "<option value='ALL'>" . $app_strings['COMBO_ALL'] . '</option>';
	}

	$userSelectdata .= "<option value='$current_user->id'".(($current_user->id == $useridInUse)? "selected='true'":'').'>'.$mod_strings['LBL_MINE'].'</option>';

	for ($index = 0; $index < $userscount; ++$index) {
		$userid = $adb->query_result($users, $index, 'id');
		if ($userid == $current_user->id) {
			continue; // We have already taken care of listing at first.
		}
		$username = $adb->query_result($users, $index, 'user_name');
		$userselect = '';
		if ($userid == $useridInUse) {
			$userselect = "selected='true'";
		}
		$userSelectdata .= "<option value='$userid' $userselect>$username</option>";
	}
	$userSelectdata .= '</select></span>';
	return $userSelectdata;
}
?>
