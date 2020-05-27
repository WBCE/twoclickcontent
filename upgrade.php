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

global $database;
	$table = TABLE_PREFIX.'mod_twoclickcontent';
	$field = 'image';
	$desc = 'TEXT NOT NULL';
	$query = $database->query("DESCRIBE `$table` `$field`");
	if(!$query || $query->numRows() == 0) { // add field
		$query = $database->query("ALTER TABLE `$table` ADD `$field` $desc");
	}

make_dir(WB_PATH.'/media/twoclickcontent/');

//upgrade message
$msg = 'all upgraded';

if(file_exists(WB_PATH.'/modules/twoclickcontent/classes')) {
  rm_full_dir(WB_PATH.'/modules/twoclickcontent/classes/');
}



