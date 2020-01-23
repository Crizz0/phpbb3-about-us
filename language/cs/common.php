<?php
/**
*
* About us extension for the phpBB Forum Software package.
* Czech
*
* @copyright (c) 2014-2020 Crizzo <https://www.crizzo.de>
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
	'ABOUTUS'						=> 'O nás',
	'ABOUTUS_SETTINGS'				=> 'Nastavení modulu „O nás“',
	'ABOUTUS_UPDATED'				=> 'Modul „O nás“ byl úspěšně aktualizován.',
	'ABOUTUS_AND'					=> 'a',

	'ACP_ABOUTUS_ENABLE'			=> 'Povolit sekci „O nás“',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Pokud není stránka „O nás“ povolena, nebude v zápatí fóra zobrazen odkaz pro její otevření. Nicméně prostřednictvím URL adresy „app.php/aboutus“ je možné stránku „O nás“ zobrazit.',
	'ACP_ABOUTUS_INFO'				=> 'Text „O nás“',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Zde můžete nastavit text, který bude zobrazován na stránce „O nás“.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Náhled',
	'ACP_ABOUTUS_SETTINGS'			=> 'Nastavení modulu „O nás“',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Zde můžete povolit či zakázat stránku „O nás“ a nastavit text, který bude na této stránce zobrazován.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Zobrazovat podmínky použití',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Zobrazení odkazu na podmínky použití na stránce „O nás“.',
	'ACP_PRIVACY_ENABLE' 				=> 'Zobrazovat zásady ochrany soukromí',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Zobrazení odkazu na zásady ochrany soukromí na stránce „O nás“.',

	'ACP_META_NOINDEX_ENABLE'			=> 'Neindexovat metadata',
	'ACP_META_NOINDEX_ENABLE_EXPLAIN'	=> 'Informuje roboty vyhledávačů, že nemají indexovat stránku „O nás“. Robotům to však v indexaci aktivně nezabrání.',

	'DESCRIPTION_PRIVACY'				=> 'Zásady ochrany soukromí naleznete zde:',
	'DESCRIPTION_TERMS_OF_USE'			=> 'Podmínky použití naleznete zde:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'	=> 'Podmínky použití a zásady ochrany soukromí naleznete zde:',

	'VIEWONLINE_ABOUTUS'				=> 'Zobrazování „O nás“',
));
