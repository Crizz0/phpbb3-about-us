<?php
/**
* ../language/et/common.php
* @package phpBB Extension - Crizzo About us 
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* About us Estonian language pack version 09/2014 by phpbbeesti.com
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

	'ACP_ABOUTUS_ENABLE'			=> 'Meist',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Kui "Lubatud" kuvab lingi jalusesse ja lehte kasutajatele. Kui "Keelatud", siis lehte ei näidata.',
	'ACP_ABOUTUS_INFO'				=> 'Lehekülje "Meist" tekst',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Sa saad muuta teksti, mida näidatakse lehekülje "Meist" lehel siin.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Lehekülje "Meist" eelvaade',
	'ACP_ABOUTUS_SETTINGS'			=> 'Lehekülje "Meist" seaded',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Siin saad muuta oma teksti, mida näidatakse lehel "Meist" või lubada / keelata laienduse',

	'VIEWONLINE_ABOUTUS'	=> 'Vaatab lehekülge "Meist"',
));
