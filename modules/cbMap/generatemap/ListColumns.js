/*************************************************************************************************
 * Copyright 2022 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS Customizations.
 * Licensed under the vtiger CRM Public License Version 1.1 (the "License"); you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOS distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://corebos.org/documentation/doku.php?id=en:devel:vpl11>
 *************************************************************************************************/

const LCInstance = {

	MapID: 0,
	MapFields: [],
	ModuleName: '',
	MapName: '',

	SaveMap: () => {
		let fields = Array();
		if (typeof LCInstance.MapFields == 'string') {
			LCInstance.MapFields = JSON.parse(LCInstance.MapFields);
		}
		LCInstance.MapFields.map(function(currentValue, idx) {
			const checkbox = document.getElementById(`checkbox-${currentValue.name}`);
			if (checkbox.checked) {
				fields.push(currentValue.name);
			}
		});
		fetch(
			'index.php?module=Utilities&action=UtilitiesAjax&file=MassCreateGridAPI&method=SaveMapFromModule',
			{
				method: 'post',
				headers: {
					'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
				},
				credentials: 'same-origin',
				body: '&'+csrfMagicName+'='+csrfMagicToken+'&fields='+JSON.stringify(fields)+'&MapID='+LCInstance.MapID+'&moduleName='+LCInstance.ModuleName+'&mapName='+LCInstance.MapName
			}
		).then(response => response.json()).then(response => {
			window.opener.location.reload();
			window.close();
		});
	}
}