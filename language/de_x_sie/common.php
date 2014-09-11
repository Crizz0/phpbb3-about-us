<?php
/**
*
* @package phpBB Extension - Crizzo About Us German (Formal honorifics)
* @copyright (c) 2014 phpBB Group
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
	'ABOUTUS'						=> 'Impressum',
	'ABOUTUS_SETTINGS'				=> 'Impressum-Einstellungen',
	'ABOUTUS_UPDATED'				=> 'Das Impressum wurde erfolgreich aktualisiert.',

	'ACP_ABOUTUS_ENABLE'			=> 'Impressum aktivieren',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> '"Ja" zeigt den Link zum Impressum im Fuß der Seite und das Impressum selbst an. "Nein" macht das Gegenteil, löscht aber nicht Ihren gespeicherten Text.',
	'ACP_ABOUTUS_SETTINGS'			=> 'Impressum-Einstellungen',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Hier können Sie den Text eingeben, der im Impressum angezeigt wird und das Impressum deaktivieren oder aktivieren.',
	'ACP_ABOUTUS_INFO'				=> 'Impressums Text',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Hier können Sie den Text verändern, der im Impressum angezeigt wird.',

	'VIEWONLINE_SIMPLEIMPRINT'	=> 'Betrachtet das Impressum',
));
