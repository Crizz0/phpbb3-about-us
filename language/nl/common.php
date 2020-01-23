<?php
/**
*
* About us extension for the phpBB Forum Software package.
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
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
	'ABOUTUS'						=> 'Over Ons',
	'ABOUTUS_SETTINGS'				=> 'Over ons instellingen',
	'ABOUTUS_UPDATED'				=> 'Over ons is succesvol bijgewerkt.',
	'ABOUTUS_AND'					=> 'en',

	'ACP_ABOUTUS_ENABLE'			=> 'Over ons inschakelen',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Als de “Over ons” pagina is uitgeschakeld, dan zal je forum de link naar de “Over ons”-pagina niet weergeven. Je kan de “Over ons”-pagina alsnog bezoeken met de link “app.php/aboutus”. ',
	'ACP_ABOUTUS_INFO'				=> 'Over ons tekst',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Hier kan je de tekst aanpassen die wordt weergegeven op de over ons pagina.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Over ons voorbeeld',
	'ACP_ABOUTUS_SETTINGS'			=> 'Over ons instellingen',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Hier kan je de tekst voor de over ons pagina aanpassen en je kan de over ons pagina inschakelen of uitschakelen.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Laat voorwaarden voor gebruik zien',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Laat een link naar de voorwaarden voor gebruik zien op de over ons pagina.',
	'ACP_PRIVACY_ENABLE' 				=> 'Laat privacybeleid zien',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Laat een link naar het privacybeleid zien op de over ons pagina.',

	'ACP_META_NOINDEX_ENABLE'			=> 'Meta-tag noindex inschakelen',
	'ACP_META_NOINDEX_ENABLE_EXPLAIN'	=> 'Geeft aan zoekmachinerobots aan dat ze de "Over ons"-pagina niet moeten indexeren. Let op: deze robots zijn er vrij in of ze deze keuze respecteren, het is dus geen verplichting voor ze om zich hier aan te houden.',

	'DESCRIPTION_PRIVACY'			=> 'Je kan het privacybeleid hier zien:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Je kan de voorwaarden voor gebruik hier zien:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Je kan de voorwaarden voor gebruik en het privacybeleid hier zien:',

	'VIEWONLINE_ABOUTUS'	=> 'Bekijkt Over ons',
));
