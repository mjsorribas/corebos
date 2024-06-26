<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

/** Function to get the top 5 Accounts order by Amount in Descending Order
 * @return array array with the title, header and entries like Array('Title'=>$title,'Header'=>$listview_header,'Entries'=>$listview_entries)
 * 	where listview_header and listview_entries are arrays of header and entity values which are returned from function getListViewHeader and getListViewEntries
*/
function getTopAccounts($maxval, $calCnt) {
	$log = LoggerManager::getLogger('top accounts_list');
	$log->debug('> getTopAccounts');
	require_once 'data/Tracker.php';
	require_once 'modules/Potentials/Potentials.php';
	require_once 'include/logging.php';
	require_once 'include/ListView/ListView.php';
	require_once 'data/CRMEntity.php';
	global $app_strings, $adb, $current_language, $current_user;
	$current_module_strings = return_module_language($current_language, "Accounts");
	$crmEntityTable = CRMEntity::getcrmEntityTableAlias('Potentials');
	$list_query = 'select vtiger_account.accountid, vtiger_account.accountname, '.
		'sum(vtiger_potential.amount) as amount from vtiger_potential '.
		'inner join '.$crmEntityTable.' on (vtiger_potential.potentialid=vtiger_crmentity.crmid) '.
		'inner join vtiger_account on (vtiger_potential.related_to=vtiger_account.accountid) ';
	$list_query .= ' WHERE vtiger_crmentity.deleted=0 AND vtiger_potential.potentialid>0';
	$list_query .= " AND vtiger_crmentity.smownerid='".$current_user->id."' ".
		"and vtiger_potential.sales_stage not in ('Closed Won', 'Closed Lost','".$app_strings['LBL_CLOSE_WON']."','".$app_strings['LBL_CLOSE_LOST']."')";
	$list_query .= ' group by vtiger_account.accountid order by amount desc';
	$list_query .= ' LIMIT 0,' . $adb->sql_escape_string($maxval);

	if ($calCnt == 'calculateCnt') {
		$list_result_rows = $adb->query(mkCountQuery($list_query));
		return $adb->query_result($list_result_rows, 0, 'count');
	}

	$list_result=$adb->query($list_query);
	$open_accounts_list = array();
	$noofrows = $adb->num_rows($list_result);

	if ($noofrows) {
		for ($i=0; $i<$noofrows; $i++) {
			$open_accounts_list[] = array(
				'accountid' => $adb->query_result($list_result, $i, 'accountid'),
				'accountname' => $adb->query_result($list_result, $i, 'accountname'),
				'amount' => $adb->query_result($list_result, $i, 'amount'),
				'tickersymbol' => $adb->query_result($list_result, $i, 'tickersymbol'),
			);
		}
	}

	$title=array();
	$title[]='myTopAccounts.gif';
	$title[]=$current_module_strings['LBL_TOP_ACCOUNTS'];
	$title[]='home_myaccount';

	$header=array();
	$header[]=$current_module_strings['LBL_LIST_ACCOUNT_NAME'];
	$currencyid=fetchCurrency($current_user->id);
	$rate_symbol = getCurrencySymbolandCRate($currencyid);
	$curr_symbol = $rate_symbol['symbol'];
	$header[]=$current_module_strings['LBL_LIST_AMOUNT'].'('.$curr_symbol.')';
	$header[] = $current_module_strings['LBL_POTENTIAL_TITLE'];

	$entries=array();
	foreach ($open_accounts_list as $account) {
		$value=array();
		$Top_Accounts = (strlen($account['accountname']) > 20) ? (substr($account['accountname'], 0, 20).'...') : $account['accountname'];
		$value[]='<a href="index.php?action=DetailView&module=Accounts&record='.$account['accountid'].'">'.$Top_Accounts.'</a>';
		$value[] = CurrencyField::convertToUserFormat($account['amount']);
		$entries[$account['accountid']]=$value;
	}
	$values=array('ModuleName'=>'Accounts','Title'=>$title,'Header'=>$header,'Entries'=>$entries);
	$log->debug('< getTopAccounts');
	return $values;
}
?>
