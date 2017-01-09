<?php
/**
*
* About us extension for the phpBB Forum Software package.
* German (Formal honorifics)
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'Impressum',
	'ABOUTUS_SETTINGS'				=> 'Impressums-Einstellungen',
	'ABOUTUS_UPDATED'				=> 'Das Impressum wurde erfolgreich aktualisiert.',
	'ABOUTUS_AND'					=> 'und',

	'ACP_ABOUTUS_ENABLE'			=> 'Impressum aktivieren',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Wenn das Impressum deaktiviert ist, wird im Board kein sichtbarer Link zum Impressum angezeigt. Dennoch kann das Impressum über den Link „app.php/aboutus” besucht werden.',
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
