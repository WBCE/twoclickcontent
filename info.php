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



$module_directory = 'twoclickcontent';
$module_name = 'twoclickcontent';
$module_function = 'page';
$module_version = '0.8';
$module_platform = '1.4.0';
$module_author = 'florian';
$module_license = 'WTFPL';
$module_description = 'This module loads external scripts (e.g. Google Maps) only with consent of the visitors (according to GDPR).';

/*
0.8 2020/07/13
* Add SameSite setting so Firefox stops complaining

0.7 2020/05/27
! Fix for Fatal Error when used with other wysiwyg2 based modules on the same page (thx to Bernd)

v0.6.1  fixes for MySQL-Strict (Bernd)
*/