{*<!--/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
********************************************************************************/ -->*}
<form action="index.php" method="post" name="form" onsubmit="VtigerJS_DialogBox.block();">
	<input type="hidden" name="fld_module" value="{$MODULE}">
	<input type="hidden" name="module" value="Settings">
	<input type="hidden" name="parenttab" value="Settings">
	{assign var=entries value=$CFENTRIES}

	<div style="display:block;" id="arrangeRelatedListPopup" class="layerPopup">
		<table class="slds-table slds-no-row-hover" width="100%">
			<tr class="slds-text-title--header">
				<th scope="col">
					<div class="slds-truncate moduleName">
						<b>{$MOD.LBL_RELATED_LIST}</b>
					</div>
				</th>
				<th scope="col" style="padding: .5rem; text-align: right;">
					<div class="slds-truncate">
						<img src="{'close.gif'|@vtiger_imageurl:$THEME}" border="0" align="absmiddle" onclick="fninvsh('relatedlistdiv');" alt="{$APP.LBL_CLOSE}" title="{$APP.LBL_CLOSE}" />
					</div>
				</th>
			</tr>
		</table>

		<table border=0 cellspacing=0 cellpadding=5 width=95% align=center style="border-bottom: 1px solid #d4d4d4;">
				<tr class="big">
					<td width="80%" style="border-bottom-color: #ddd;border-bottom-width: 1px; border-bottom-style: solid;">
						<select class="slds-select" name='relatewithmodule' id='relatewithmodule'>
							{html_options options=$NotRelatedModules}
						</select>
					</td>
					<td width="20%" align="right" style="border-bottom-color: #ddd;border-bottom-width: 1px; border-bottom-style: solid;">
						<input class="slds-button slds-button--small slds-button_success" title="{$APP.LBL_ADD_NEW}" onclick="createRelatedList('{$MODULE}');" type="button" name="crlbutton" value=" {$APP.LBL_ADD_NEW} ">
					</td>
				</tr>
				{foreach item=related from=$RELATEDLIST name=relinfo}
				<tr>
					<td class="small">
						<table class="slds-table slds-no-row-hover">
							<tr>
								<td class="dvtCellLabel text-left" width="50%">{$related.label}</td>
								{if $smarty.foreach.relinfo.first}
									<td align="right" class="dvtCellInfo">
										<img src="{'blank.gif'|@vtiger_imageurl:$THEME}" style="width:16px;height:16px;" border="0" />
									</td>
									<td class="dvtCellInfo" align="right" valign="middle">
										<img src="{'arrow_down.png'|@vtiger_imageurl:$THEME}" border="0" style="cursor:pointer;" onclick="changeRelatedListorder('move_down','{$related.tabid}','{$related.sequence}','{$related.id}','{$MODULE}'); " alt="{$MOD.DOWN}" title="{$MOD.DOWN}">
									</td>
								{elseif $smarty.foreach.relinfo.last}
									<td class="dvtCellInfo" align="left" valign="middle">
										<img src="{'arrow_up.png'|@vtiger_imageurl:$THEME}" border="0" style="cursor:pointer;" onclick="changeRelatedListorder('move_up','{$related.tabid}','{$related.sequence}','{$related.id}','{$MODULE}'); " alt="{$MOD.UP}" title="{$MOD.UP}">
									</td>
									<td align="right" class="dvtCellInfo">
										<img src="{'blank.gif'|@vtiger_imageurl:$THEME}" style="width:16px;height:16px;" border="0" />
									</td>
								{else}
									<td class="dvtCellInfo" align="left" valign="middle">
										<img src="{'arrow_up.png'|@vtiger_imageurl:$THEME}" border="0" style="cursor:pointer;" onclick="changeRelatedListorder('move_up','{$related.tabid}','{$related.sequence}','{$related.id}','{$MODULE}') " alt="{$MOD.UP}" title="{$MOD.UP}">
									</td>
									<td class="dvtCellInfo" align="right" valign="middle">
										<img src="{'arrow_down.png'|@vtiger_imageurl:$THEME}" border="0" style="cursor:pointer;" onclick="changeRelatedListorder('move_down','{$related.tabid}','{$related.sequence}','{$related.id}','{$MODULE}') " alt="{$MOD.DOWN}" title="{$MOD.DOWN}">
									</td>
								{/if}
								<td class="dvtCellInfo" align="center" valign="middle">
									<img src="{'delete.gif'|@vtiger_imageurl:$THEME}" border="0" style="cursor:pointer;" onclick="if (confirm(alert_arr.ARE_YOU_SURE_YOU_WANT_TO_DELETE)) deleteRelatedList('{$related.tabid}','{$related.sequence}','{$related.id}','{$MODULE}');" alt="{$MOD.LBL_DELETE}" title="{$MOD.LBL_DELETE}">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				{/foreach}
		</table>
	</div>
</form>
