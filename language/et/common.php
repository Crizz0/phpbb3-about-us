<?php
/**
*
* About us extension for the phpBB Forum Software package.
* Estonian
*
* @copyright (c) 2014-2017 Crizzo <http://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'Meist',
	'ABOUTUS_SETTINGS'				=> 'Lehekülje “Meist” seaded',
	'ABOUTUS_UPDATED'				=> 'Lehekülg “Meist” on edukalt uuendatud.',
	'ABOUTUS_AND'					=> 'ja',

	'ACP_ABOUTUS_ENABLE'			=> 'Luba näidata lehekülge “Meist”',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Kui lehekülg “Meist” on keelatud, siis ei näidata jaluses linki antud leheküljele - ükskõik kas URLile “app.php/aboutus” saab ligi või mitte. ',
	'ACP_ABOUTUS_INFO'				=> 'Lehekülje “Meist” tekst',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Siin sa saad muuta teksti mida näidatakse leheküljel “Meist”.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Lehekülje “Meist” eelvaade',
	'ACP_ABOUTUS_SETTINGS'			=> 'Lehekülje “Meist” seaded',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Siin saad sisestada teksti mida näidatakse leheküljel “Meist” ja lubada või keelata antud lehekülje.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Näita kasutustingimusi',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Näitab leheküljel “Meist” linki kasutustingimustele.',
	'ACP_PRIVACY_ENABLE' 				=> 'Näita privaatsuspoliisi',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Näitab leheküljel “Meist” linki privaatsuspoliisile.',

	'DESCRIPTION_PRIVACY'			=> 'Privaatsuspoliisi kohta sa saad vaadata rohkem siit:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Kasutustingimuste kohta sa saad vaadata rohkem siit:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Kasutustingimusi ja privaatsuspoliisi sa saad vaadata siit:',

	'VIEWONLINE_ABOUTUS'	=> 'Vaatab lehekülge “Meist”',
));
