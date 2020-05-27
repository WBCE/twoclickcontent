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


//Load Language Files
if (file_exists(WB_PATH.'/modules/twoclickcontent/languages/'.LANGUAGE.'.php')) {
	require_once(WB_PATH.'/modules/twoclickcontent/languages/'.LANGUAGE.'.php');
}
else {
	require_once(WB_PATH.'/modules/twoclickcontent/languages/EN.php');
}
	
// Fetch media URL for replacing {SYSVAR:MEDIA_REL}
$sMediaUrl = WB_URL.MEDIA_DIRECTORY;

// Get page content   htmlspecialchars
$content = '';
$content_short = '';
$headline = '';
$sizex='';
$sizey='';
$image=WB_URL.'/modules/twoclickcontent/dsgvo.svg';
$image_delete_disabled = 'disabled';

$sql = 'SELECT * FROM `'.TABLE_PREFIX.'mod_twoclickcontent` WHERE `section_id`='.(int)$section_id;
$get_content = $database->query($sql);
$rows = $get_content->numRows();
if ($rows==1) {
	$Data = $get_content->fetchRow();
	
	// get values for Variables
	$content = $Data['content'] ;	
	$content_short = $Data['content_short'];
	$headline = $Data['headline'];
	$sizex = $Data['sizex'];
	$sizey = $Data['sizey'];
	if ($Data['image']!="") {
		$image = str_replace('{SYSVAR:MEDIA_REL}', $sMediaUrl, $Data['image'] );
		$image_delete_disabled='';
	}

} else {
	echo "<h3>Database error, did not found the right number of rows ($rows)</h3>" ;
}



include (WB_PATH."/modules/twoclickcontent/templates/modify.tpl.php");


