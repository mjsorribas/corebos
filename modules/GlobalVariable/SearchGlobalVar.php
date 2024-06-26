<?php
/*************************************************************************************************
 * Copyright 2015 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS customizations.
 * You can copy, adapt and distribute the work under the "Attribution-NonCommercial-ShareAlike"
 * Vizsage Public License (the "License"). You may not use this file except in compliance with the
 * License. Roughly speaking, non-commercial users may share and modify this code, but must give credit
 * and share improvements. However, for proper details please read the full License, available at
 * http://vizsage.com/license/Vizsage-License-BY-NC-SA.html and the handy reference for understanding
 * the full license at http://vizsage.com/license/Vizsage-Deed-BY-NC-SA.html. Unless required by
 * applicable law or agreed to in writing, any software distributed under the License is distributed
 * on an  "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the
 * License terms of Creative Commons Attribution-NonCommercial-ShareAlike 3.0 (the License).
 *************************************************************************************************
 *  Module       : Global Variable Tester
 *  Version      : 1.0
 *  Author       : JPL TSolucio, S. L.
 *************************************************************************************************/

require_once 'modules/GlobalVariable/GlobalVariable.php';
$defval = isset($_REQUEST['gvdefault']) ? vtlib_purify($_REQUEST['gvdefault']) : '';
if (empty($_REQUEST['gvname'])) {
	$ret = array($defval);
} else {
	$gvname = vtlib_purify($_REQUEST['gvname']);
	$gvuserid = isset($_REQUEST['gvuserid']) ? vtlib_purify($_REQUEST['gvuserid']) : '';
	$gvmod = isset($_REQUEST['gvmodule']) ? vtlib_purify($_REQUEST['gvmodule']) : '';
	$viewtype = isset($_REQUEST['viewtype']) ? vtlib_purify($_REQUEST['viewtype']) : '';
	$retval = isset($_REQUEST['returnvalidation']) ? vtlib_purify($_REQUEST['returnvalidation']) : false;
	$startTime = microtime(true);
	$rdo = GlobalVariable::getVariable($gvname, $defval, $gvmod, $gvuserid, $viewtype);
	$counter = (microtime(true) - $startTime);
	$ret = array($gvname=>$rdo);
	if ($retval) {
		$gvvalidationinfo = GlobalVariable::getValidationInfo();
		$gvvalidationinfo[] = "<h2 align='center'>RESULT: $rdo</H2>";
		$ret['validation'] = $gvvalidationinfo;
		$ret['timespent'] = round($counter*1000, 1);
	}
}
echo json_encode($ret);
?>