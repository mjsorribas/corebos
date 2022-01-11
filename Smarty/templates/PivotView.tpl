{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  coreBOS Open Source
 * The Initial Developer of the Original Code is coreBOS
 * All Rights Reserved.
 ********************************************************************************/
-->*}
{if $showDesert}
	{assign var='DESERTInfo' value='LBL_NO_DATA'|@getTranslatedString:$MODULE}
	{include file='Components/Desert.tpl'}
{else}
<script src="include/pivottable/pivot.js"></script>
<link href="include/pivottable/pivot.css" rel="stylesheet">
<script src="include/pivottable/export_renderers.min.js"></script>
<script src="include/pivottable/nrecopivottableext.js"></script>
<link href="include/pivottable/nrecopivottableext.css" rel="stylesheet">
<link href="include/pivottable/pivot.css" rel="stylesheet">
<script type="text/javascript">
{literal}
$(function() {
	let url = `index.php?module=Utilities&action=UtilitiesAjax&file=ExecuteFunctions&functiontocall=getMapByName&mapname=${gVTModule}_Pivot`;
	fetch(
		url,
		{
			method: 'get',
			headers: {
				'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
			},
			credentials: 'same-origin',
		}
	).then(response => response.json()).then(response => {
		let mapContent = response.content;
		var advFilter = Array();
		var sum = $.pivotUtilities.aggregatorTemplates.sum;
		var numberFormat = $.pivotUtilities.numberFormat;
		var intFormat = numberFormat({digitsAfterDecimal: 0});
		var stdRendererNames = ["Table","Table Barchart","Heatmap","Row Heatmap","Col Heatmap"];
		var wrappedRenderers = $.extend( {}, $.pivotUtilities.renderers);
		var nrecoPivotExt = new NRecoPivotTableExtensions({
			drillDownHandler: function (dataFilter) {
				var filterParts = [];
				for (var k in dataFilter) {
					filterParts.push(k+"="+dataFilter[k]);
				}
			}
		});
		$.each(stdRendererNames, function() {
			var rName = this;
			wrappedRenderers[rName] = nrecoPivotExt.wrapPivotExportRenderer(nrecoPivotExt.wrapTableRenderer(wrappedRenderers[rName]));
		});
		$("#output").pivotUI([{/literal}{$RECORDS}{literal}], {
			rows: [{/literal}{$ROWS}{literal}],
			cols: [{/literal}{$COLS}{literal}],
			{/literal}{$aggreg}{literal},
			renderers: wrappedRenderers,
			rendererOptions: {
				table: {
					clickCallback: function(e, value, filters, pivotData) {
						let names = Array();
						let rows = Array();
						let fields = Array();
						//get rows and cols from map
						Object.keys(mapContent).map(function(key, index) {
							if (typeof mapContent[key] == 'object') {
								for (let i in mapContent[key]) {
									rows.push(mapContent[key][i]);
								}
							}
						});
						for (let label in filters) {
							Object.keys(rows).map(function(key, index) {
								if (label == rows[key].label) {
									fields.push(rows[key].name);
									advFilter.push({
										'columnname': rows[key].name,
										'comparator': 'e',
										'value': filters[label],
										'groupid': 1,
										'columncondition': 'and'
									});
								}
							});
						}
						let url = `index.php?module=Utilities&action=UtilitiesAjax&file=ExecuteFunctions&functiontocall=getFieldsAttributes&modulename=${gVTModule}&fields=${fields}`;
						getData(url, advFilter).then(res => {
							res[0].fields.map(function(cValue) {
								const columnname = `${cValue.tablename}:${cValue.columnname}:${cValue.fieldname}:${gVTModule}_${cValue.fieldlabel}:${cValue.typeofdata}`;
								Object.keys(res[1]).map(function(key, idx) {
									if (res[1][key].columnname == cValue.fieldname) {
										res[1][key].columnname = columnname;
									}
								});
							});
							const Pivot_AdvancedSearch = res[1];
							const urlstring = `${JSON.stringify(Pivot_AdvancedSearch)}&advft_criteria_groups=[null,{"groupcondition":""}]`;
							window.open(`index.php?module=${gVTModule}&action=index&query=true&search=true&searchtype=advance&advft_criteria=${urlstring}`, '_blank');
						});
						advFilter = Array();
						fields = Array();
					}
				}
			}
		});
	});
});
async function getData(url, filter) {
	const response = await fetch(url);
	return Array(
		await response.json(),
		filter
	);
}
{/literal}
</script>
<div id="output" style="margin: 30px;overflow-x: scroll; width:1000px; "></div>
{/if}
<div id="pivotdetail" class="layerPopup" style="display:none;position: fixed; left: 1100px; top: 500px; visibility: visible; z-index:10000000">
{include file="Pivotdetail.tpl"}
</div>