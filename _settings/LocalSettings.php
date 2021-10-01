<?php
$wgGroupPermissions['*']['read'] = true;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['talk'] = false;
$wgGroupPermissions['*']['createaccount'] = false;

$wgGroupPermissions['interface-admin']['gadgets-edit'] = true;
$wgGroupPermissions['interface-admin']['gadgets-definition-edit'] = true;

$wgWhitelistRead = [
	"Main Page"
];

enableSemantics( 'smw' );

wfLoadExtension( 'Arrays' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'CodeMirror' );
wfLoadExtension( 'ConfirmAccount' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'Loops' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'PageForms' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'SimpleBatchUpload' );
wfLoadExtension( 'Variables' );
wfLoadExtension( 'VisualEditor' );

$wgPFEnableStringFunctions = true;
$wgRestrictDisplayTitle = false;
$wgAllowSiteCSSOnRestrictedPages = true;

/**
$wgResourceModules['ext.datatables'] = [
    'scripts' => [ 'extensions/wikivisor/datatables/datatables.min.js' ],
    'styles' => [ 'extensions/wikivisor/datatables/datatables.min.css' ],
];

function addDataTablesScript( &$out ) {
    $out->addModules( 'ext.datatables' );
}
$wgHooks['BeforePageDisplay'][] = 'addDataTablesScript';
*/

$egChameleonLayoutFile = "$IP/extensions/wikivisor/skins/chameleon/layouts/wikicraft.xml";

$egChameleonExternalStyleVariables = [
	'container-max-widths' => '(sm: 540px, md: 768px, lg: 1105px, xl: 1440px)',
];

$egChameleonExternalStyleModules = [
	"$IP/extensions/wikivisor/skins/chameleon/wikicraft.scss" => 'afterMain',
];

$wgLogos = [
	'1x' => null,
];

## $wgShowExceptionDetails = true;
## $egScssCacheType = CACHE_NONE;

$wgVisualEditorEnableWikitext = true;
$wgDefaultUserOptions['visualeditor-newwikitext'] = 1;
$wgHiddenPrefs[] = 'visualeditor-newwikitext';
$wgVisualEditorEnableDiffPage = true;
$wgVisualEditorEnableVisualSectionEditing = true;

