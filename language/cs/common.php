<?php
/**
*
* @package phpBB Extension - Crizzo About us - Czech
* @copyright (c) 2015 Crizzo - www.crizzo.de
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
	'ABOUTUS'						=> 'O nás',
	'ABOUTUS_SETTINGS'				=> 'Nastavení modulu „O nás“',
	'ABOUTUS_UPDATED'				=> 'Modul „O nás“ byl úspěšně aktualizován.',
	'ABOUTUS_AND'					=> 'a',
	'ACP_ABOUTUS_ENABLE'			=> 'Povolit sekci „O nás“',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Pokud není stránka „O nás“ povolena, nebude v zápatí fóra zobrazen odkaz pro její otevření. Nicméně prostřednictvím URL adresy „app.php/aboutus“ je možné stránku „O nás“ zobrazit. ',
	'ACP_ABOUTUS_INFO'				=> 'Text „O nás“',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Zde můžete nastavit text, který bude zobrazován na stránce „O nás“.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Náhled',
	'ACP_ABOUTUS_SETTINGS'			=> 'Nastavení modulu „O nás“',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Zde můžete povolit či zakázat stránku „O nás“ a nastavit text, který bude na této stránce zobrazován.',
	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Zobrazovat podmínky použití',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Zobrazení odkazu na podmínky použití na stránce „O nás“.',
	'ACP_PRIVACY_ENABLE' 				=> 'Zobrazovat zásady ochrany soukromí',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Zobrazení odkazu na zásady ochrany soukromí na stránce „O nás“.',
	'DESCRIPTION_PRIVACY'			=> 'Zásady ochrany soukromí naleznete zde:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Podmínky použití naleznete zde:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Podmínky použití a zásady ochrany soukromí naleznete zde:',
	'VIEWONLINE_ABOUTUS'	=> 'Zobrazování „O nás“',
));
