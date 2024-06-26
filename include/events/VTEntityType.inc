<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
require_once 'include/events/SqlResultIterator.inc';

class VTEntityType {

	public $moduleName;
	public $tabId;
	public $adb;

	public function __construct($adb, $setype) {
		$this->moduleName=$setype;
		require_once 'modules/'.$setype.'/'.$setype.'.php';
		$result = $adb->pquery('select tabid from vtiger_tab where name=?', array($setype));
		$tabId = $adb->query_result($result, 0, 'tabid');
		$this->tabId = $tabId;
		$this->adb = $adb;
	}

	public function getTabId() {
		return $this->tabId;
	}

	public function getModuleName() {
		return $this->moduleName;
	}

	public function getFieldNames() {
		$adb = $this->adb;
		$arr = array();
		$result = $adb->pquery('select fieldname from vtiger_field where tabid=? and vtiger_field.presence in (0,2)', array($this->getTabId()));
		$it = new SQLResultIterator($adb, $result);
		foreach ($it as $row) {
			$arr[] = $row->fieldname;
		}
		return $arr;
	}

	public function getFieldType($fieldName) {
		$adb = $this->adb;
		$result = $adb->pquery('select uitype from vtiger_field where fieldname=? and tabid=? and vtiger_field.presence in (0,2)', array($fieldName, $this->tabId));
		$uitype = $adb->query_result($result, 0, 'uitype');
		$fieldType = new VTFieldType();
		if ($uitype == 71) {
			$fieldType->type = 'Number';
		} else {
			$fieldType->type = 'String';
		}
		return $fieldType;
	}

	public function getFieldTypes() {
		$fieldNames = $this->getFieldNames();
		$fieldTypes = array();
		foreach ($fieldNames as $fieldName) {
			$fieldTypes[$fieldName]=$this->getFieldType($fieldName);
		}
		return $fieldTypes;
	}
}

class VTFieldType {

	public $type = '';

	public function toArray() {
		$ro = new ReflectionObject($this);
		$props = $ro->getProperties();
		$arr = array();
		foreach ($props as $prop) {
			$arr[$prop->getName()]=$prop->getValue($this);
		}
		return $arr;
	}
}
?>
