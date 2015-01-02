<?php
/**
*
* @package phpBB Extension - Crizzo About Us (Dutch)
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
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
	'ABOUTUS'						=> 'Over Ons',
	'ABOUTUS_SETTINGS'				=> '“Over ons”-instellingen',
	'ABOUTUS_UPDATED'				=> '“Over ons” is succesvol bijgewerkt.',

	'ACP_ABOUTUS_ENABLE'			=> 'Over ons inschakelen',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Als de "Over ons" pagina uitgeschakeld is, laat je forum de link in de footer naar de "Over" pagina niet zien. Desalniettemin kan je met de link "app.php/aboutus" de "Over ons" pagina nog steeds bekijken.',	
	'ACP_ABOUTUS_INFO'				=> '“Over ons”-tekst',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Hier kan je de tekst aanpassen die wordt weergegeven op de “Over ons”-pagina.',	
    'ACP_ABOUTUS_INFO_PREVIEW'		=> '“Over ons” voorbeeld',	
	'ACP_ABOUTUS_SETTINGS'			=> '“Over ons”-instellingen',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Hier kan je de tekst voor de “Over ons”-pagina aanpassen en je kan de “Over ons”-pagina inschakelen of uitschakelen.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Laat voorwaarden voor gebruik zien',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Laat een link naar de voorwaarden voor gebruik zien op de “Over ons”-pagina.',
	'ACP_PRIVACY_ENABLE' 				=> 'Laat privacybeleid zien',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Laat een link naar het privacybeleid zien op de “Over ons”-pagina.',

	'ABOUT_US_AND'					=> 'en',

	'DESCRIPTION_PRIVACY'			=> 'Je kan het privacybeleid hier zien:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Je kan de voorwaarden voor gebruik hier zien:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Je kan de voorwaarden voor gebruik en het privacybeleid hier zien:',	
	
	'VIEWONLINE_ABOUTUS'	=> 'Bekijkt “Over ons”',
));
