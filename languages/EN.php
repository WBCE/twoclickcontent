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

/*
 -----------------------------------------------------------------------------------------
  ENGLISH LANGUAGE FILE FOR MODULE: twoclickcontent
 -----------------------------------------------------------------------------------------
*/

// Deutsche Modulbeschreibung
$module_description = 'This module loads external scripts (e.g. Google Maps) only with consent of the visitors (according to GDPR).';

$TCC['CONTENT']  = 'The code (plain HTML) as provided from the vendor';
$TCC['CONTENT_SHORT']   = 'Content description and/or privacy information';
$TCC['SIZEX']   = 'Width of the content, e.g. 400px or 50%';
$TCC['SIZEY']   = 'Height of the content, e.g. 300px or 10em';
$TCC['HEADLINE'] = 'Title/Description, e.g. Location';
$TCC['ACCEPT']  = 'Accept';
$TCC['IMAGE']  = 'Image';
$TCC['IMAGE_DELETE']  = 'Delete image';
