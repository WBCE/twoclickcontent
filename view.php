<?php
/**
 * @category        modules
 * @package         twoclickcontent
 * @author          WBCE Project
 * @copyright       florian
 * @license			WTFPL
 */
//no direct file access
if(count(get_included_files()) ==1){$z="HTTP/1.0 404 Not Found";header($z);die($z);}

// fetch the function fo template loading , this should be in core 
require_once (WB_PATH."/modules/twoclickcontent/includes/get_tpl_file.php");

//Load Language Files
if (file_exists(WB_PATH.'/modules/twoclickcontent/languages/'.LANGUAGE.'.php')) {
	require_once(WB_PATH.'/modules/twoclickcontent/languages/'.LANGUAGE.'.php');
}
else {
	require_once(WB_PATH.'/modules/twoclickcontent/languages/EN.php');
}


// fetch MEdial url for replace {SYSVAR:MEDIA_REL}
$sMediaUrl = WB_URL.MEDIA_DIRECTORY;

// Get content 
$content = '';
$content_short = '';
$headline = '';
$sizex = '';
$sizey = '';
$accept = $TCC['ACCEPT'];
$image='';

$sql = 'SELECT * FROM `'.TABLE_PREFIX.'mod_twoclickcontent` WHERE `section_id`='.(int)$section_id;
$get_content = $database->query($sql);
$rows = $get_content->numRows();
if ($rows==1) {
	$Data = $get_content->fetchRow();
	
	// get values for Variables
	$content = $Data['content'];	
	$content_short = $Data['content_short'];
	$headline = $Data['headline'];
	$sizex = $Data['sizex'];
	$sizey = $Data['sizey'];
	if ($Data['image']!="") 
		$image = str_replace('{SYSVAR:MEDIA_REL}', $sMediaUrl, $Data['image'] );
} else {
	$content= "<h3>Database error, did not found the right number of rows ($rows)</h3>" ;
}



$page_title=$wb->page_title;
$page_description=$wb->page_description;
$page_keywords=$wb->page_keywords;

//if the Template got a special template for this override the default one
include (GetModTplFile('twoclickcontent'));





