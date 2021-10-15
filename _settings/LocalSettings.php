<?php
$wgGroupPermissions['*']['read'] = false;
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
wfLoadExtension( 'CollapsibleSections' );
wfLoadExtension( 'ConfirmAccount' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'Loops' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'MyVariables' );
wfLoadExtension( 'PageForms' );
wfLoadExtension( 'PageNotice' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'SemanticACL' );
wfLoadExtension( 'SimpleBatchUpload' );
wfLoadExtension( 'Variables' );
wfLoadExtension( 'VisualEditor' );

$wgPFEnableStringFunctions = true;
$wgRestrictDisplayTitle = false;
$wgAllowSiteCSSOnRestrictedPages = true;

$egChameleonLayoutFile = "$IP/extensions/wikivisor/skins/chameleon/layouts/wikicraft.xml";

$egChameleonExternalStyleVariables = [
	'container-max-widths' => '(sm: 540px, md: 768px, lg: 1105px, xl: 1440px)',
	'font-size-base' => 'clamp(12px,calc(.8rem + .25vw),20px)',
];

$egChameleonExternalStyleModules = [
	"$IP/extensions/wikivisor/skins/chameleon/wikicraft.scss" => 'afterMain',
//        "$IP/extensions/wikivisor/skins/chameleon/pulse/_variables.scss" => 'afterFunctions',
//        "$IP/extensions/wikivisor/skins/chameleon/pulse/_bootswatch.scss" => 'afterMain'
];

$wgLogos = [
	'1x' => null,
];

## $wgShowExceptionDetails = true;
## $egScssCacheType = CACHE_NONE;

// CollapsibleSections
# $wgCollapsibleSectionsEnableDesktop = true;

// WikiEditor 2017
$wgVisualEditorEnableWikitext = true;
$wgDefaultUserOptions['visualeditor-newwikitext'] = 1;
$wgHiddenPrefs[] = 'visualeditor-newwikitext';
$wgVisualEditorEnableDiffPage = true;
$wgVisualEditorEnableVisualSectionEditing = true;

// SVG
$wgFileExtensions[] = 'svg';
$wgMaxShellMemory = 0;

// Modules
$wgResourceModules['ext.datatables'] = [
    'scripts' => [ 'extensions/wikivisor/datatables/datatables.min.js' ],
    'styles' => [ 'extensions/wikivisor/datatables/datatables.min.css' ],
];

$wgHooks['BeforePageDisplay'] = function( $out, $skin ) {
	$out->addModules([
		'ext.wikivisor',
		'ext.datatables'
	]);
	$code = <<<'START_END_MARKER'
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
	START_END_MARKER;
	$out->addHeadItem( 'head-tags-load', $code );
};

$egChameleonExternalStyleVariables = [
    'font-family-base' => '"Titillium web", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
];
