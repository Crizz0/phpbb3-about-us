<?php
/**
*
* @package phpBB Extension - Crizzo About us - German (Formal honorifics)
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
	'ABOUTUS'						=> 'Impressum',
	'ABOUTUS_SETTINGS'				=> 'Impressums-Einstellungen',
	'ABOUTUS_UPDATED'				=> 'Das Impressum wurde erfolgreich aktualisiert.',
	'ABOUTUS_AND'					=> 'und',

	'ACP_ABOUTUS_ENABLE'			=> 'Impressum aktivieren',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Wenn das Impressum deaktiviert ist, wird im Board kein sichtbarer Link zum Impressum angezeigt. Dennoch kann das Impressum über den Link "app.php/aboutus" besucht werden.',
	'ACP_ABOUTUS_INFO'				=> 'Impressums-Text',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Hier können Sie den Text verändern, der im Impressum angezeigt wird.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Impressums-Vorschau',
	'ACP_ABOUTUS_SETTINGS'			=> 'Impressums-Einstellungen',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Hier können Sie den Text eingeben, der im Impressum angezeigt wird und das Impressum deaktivieren oder aktivieren.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Nutzungsbedingungen anzeigen',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Zeigt einen Link zu den Nutzungsbedingungen auf der Impressums-Seite an.',
	'ACP_PRIVACY_ENABLE' 				=> 'Datenschutzrichtlinie anzeigen',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Zeigt einen Link zu der Datenschutzrichtlinie auf der Impressums-Seite an.',

	'DESCRIPTION_PRIVACY'				=> 'Sie können die Datenschutzrichtlinie hier nachlesen:',
	'DESCRIPTION_TERMS_OF_USE'			=> 'Sie können die Nutzungsbedingungen hier nachlesen:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'	=> 'Sie können die Nutzungsbedingungen und die Datenschutzrichtlinie hier nachlesen:',

	'VIEWONLINE_ABOUTUS'				=> 'Betrachtet das Impressum',
));
