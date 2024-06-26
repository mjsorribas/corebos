<?php
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/
require_once 'include/database/PearDatabase.php';
require_once 'include/utils/UserInfoUtil.php';

global $mod_strings, $app_strings, $adb, $theme;
$theme_path='themes/'.$theme.'/';
$image_path=$theme_path.'images/';

$smarty = new vtigerCRM_Smarty;
$profileListResult = $adb->pquery('select * from vtiger_profile', array());
$noofrows = $adb->num_rows($profileListResult);
$list_entries = array($mod_strings['LBL_LIST_NO'],$mod_strings['LBL_LIST_TOOLS'],$mod_strings['LBL_NEW_PROFILE_NAME'],$mod_strings['LBL_DESCRIPTION']);

/** gives the profile list info array
 * @param array profile list database result
 * @param integer no of rows in the $profileListResult
 * @return array profile list info array
 */
function getStdOutput($profileListResult, $noofrows) {
	global $adb, $current_user;
	$return_data = array();
	for ($i=0; $i<$noofrows; $i++) {
		$standCustFld = array();
		$profile_name = $adb->query_result($profileListResult, $i, 'profilename');
		$profile_id = $adb->query_result($profileListResult, $i, 'profileid');
		$description = $adb->query_result($profileListResult, $i, 'description');
		$current_profile = getUserProfile($current_user->id);
		if ($profile_id != 1 && $profile_id != $current_profile[0]) {
			$standCustFld['del_permission']='yes';
		} else {
			$standCustFld['del_permission']='no';
		}
		$standCustFld['profileid']= $profile_id;
		$standCustFld['profilename']= $profile_name;
		$standCustFld['description']= $description;
		$return_data[]=$standCustFld;
	}
	return $return_data;
}

$smarty->assign('LIST_HEADER', $list_entries);
$smarty->assign('LIST_ENTRIES', getStdOutput($profileListResult, $noofrows));
$smarty->assign('MOD', return_module_language($current_language, 'Settings'));
$smarty->assign('THEME', $theme);
$smarty->assign('IMAGE_PATH', $image_path);
$smarty->assign('COUNT', $noofrows);
$smarty->assign('APP', $app_strings);
$smarty->assign('CMOD', $mod_strings);
$smarty->assign('MODULE', $currentModule);
$smarty->assign('SINGLE_MOD', getTranslatedString('SINGLE_'.$currentModule));

$smarty->display('UserProfileList.tpl');
?>
