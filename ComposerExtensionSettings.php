<?php


/**
 *  Settings for extensions managed by Composer
 *
 * @todo: make the enable semantics thing pull from the wiki name
 */
enableSemantics('MissionSystems.MOD.JSC.NASA.GOV');
//$smwgShowFactbox = SMW_FACTBOX_NONEMPTY;

// SMW Settings Overrides:
$smwgQMaxSize = 5000;

// removed for composer
// require_once("$IP/extensions/SemanticResultFormats/SemanticResultFormats.php");
$srfgFormats = array(
	'calendar',
	'timeline',
	// 'exhibit', // fails after
	'eventline',
	'tree',
	'oltree',
	'ultree',
	'tagcloud',
	'outline',
	'valuerank',
	'excel',
	'filtered', 
	'jqplotchart', 
	'datatables', 
	'sum', 
	'pagewidget'
);
