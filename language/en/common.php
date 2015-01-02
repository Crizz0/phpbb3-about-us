<?php
/**
*
* @package phpBB Extension - Crizzo About us - English
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
	'ABOUTUS'						=> 'About us',
	'ABOUTUS_SETTINGS'				=> 'About us settings',
	'ABOUTUS_UPDATED'				=> 'About us was successfully updated.',
	'ABOUTUS_AND'					=> 'and',

	'ACP_ABOUTUS_ENABLE'			=> 'Enable About us',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'If the "About us" page is disabled, your board will not show a link in the footer to the "About us" page. Nevertheless with the url "app.php/aboutus" you are able to visit the "About Us" page. ',
	'ACP_ABOUTUS_INFO'				=> 'About us text',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'You can edit the text which is displayed on the About us page.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'About us Preview',
	'ACP_ABOUTUS_SETTINGS'			=> 'About us settings',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Here you are able to define the text of the "About us" page and enable or disable the "About us"-page.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Display terms of use',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Displays a link to the terms of use on the about us page.',
	'ACP_PRIVACY_ENABLE' 				=> 'Display privacy policy',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Displays a link to the privacy policy on the about us page.',

	'DESCRIPTION_PRIVACY'			=> 'You can see the privacy policy here:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'You can see the terms of use here:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'You can see the terms of use and privacy policy here:',

	'VIEWONLINE_ABOUTUS'	=> 'Viewing About us',
));
