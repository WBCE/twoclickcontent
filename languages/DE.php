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
  DEUTSCHE SPRACHDATEI FUER DAS MODUL: twoclickcontent
 -----------------------------------------------------------------------------------------
*/

// Deutsche Modulbeschreibung
$module_description = 'Mit diesem Modul werden externe Scripte (z.B. Google Maps) DSGVO-konform erst mit expliziter Zustimmung geladen.';

$TCC['CONTENT']  = 'Code (Script/ nur HTML wie vom Anbieter bereitgestellt)';
$TCC['CONTENT_SHORT']   = 'Info-Text (Beschreibung des Inhalts und/oder der Daten, die übertragen werden';
$TCC['SIZEX']   = 'Breite, z.B. 400px oder 50%';
$TCC['SIZEY']   = 'Höhe, z.B. 300px oder 10em';
$TCC['HEADLINE'] = 'Titel/Bezeichnung, z.B. Lageplan';
$TCC['ACCEPT']  = 'Akzeptieren';
$TCC['IMAGE']  = 'Bild';
$TCC['IMAGE_DELETE']  = 'Bild löschen';
