<?php
/**
*
* @package phpBB Extension - Crizzo About us - Estonian 
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'Meist',
	'ABOUTUS_SETTINGS'				=> 'Lehekülje "Meist" seaded',
	'ABOUTUS_UPDATED'				=> 'Lehekülg "Meist" on edukalt uuendatud.',
	'ABOUTUS_AND'					=> 'ja',

 	'ACP_ABOUTUS_ENABLE'			=> 'Luba näidata lehekülge "Meist"', 
 	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Kui lehekülg "Meist" on keelatud, siis ei näidata jaluses linki antud leheküljele - ükskõik kas URLile "app.php/aboutus" saab ligi või mitte. ', 
	'ACP_ABOUTUS_INFO'				=> 'Lehekülje "Meist" tekst',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Siin sa saad muuta teksti mida näidatakse leheküljel "Meist".',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Lehekülje "Meist" eelvaade',
	'ACP_ABOUTUS_SETTINGS'			=> 'Lehekülje "Meist" seaded',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Siin saad sisestada teksti mida näidatakse leheküljel "Meist" ja lubada või keelata antud lehekülje.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Näita kasutustingimusi',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Näitab leheküljel "Meist" linki kasutustingimustele.',
	'ACP_PRIVACY_ENABLE' 				=> 'Näita privaatsuspoliisi',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Näitab leheküljel "Meist" linki privaatsuspoliisile.',

	'DESCRIPTION_PRIVACY'			=> 'Privaatsuspoliisi kohta sa saad vaadata rohkem siit:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Kasutustingimuste kohta sa saad vaadata rohkem siit:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Kasutustingimusi ja privaatsuspoliisi sa saad vaadata siit:',

	'VIEWONLINE_ABOUTUS'	=> 'Vaatab lehekülge "Meist"',
));
