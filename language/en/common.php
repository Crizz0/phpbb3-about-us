<?php
/**
*
* About us extension for the phpBB Forum Software package.
* English
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
	'ABOUTUS'						=> 'About us',
	'ABOUTUS_SETTINGS'				=> 'About us settings',
	'ABOUTUS_UPDATED'				=> 'About us was successfully updated.',
	'ABOUTUS_AND'					=> 'and',

	'ACP_ABOUTUS_ENABLE'			=> 'Enable About us',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'If the “About us” page is disabled, your board will not show a link in the footer to the “About us”-page. Nevertheless with the url “app.php/aboutus” you are able to visit the “About us”-page. ',
	'ACP_ABOUTUS_INFO'				=> 'About us text',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'You can edit the text which is displayed on the “About us”-page.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'About us Preview',
	'ACP_ABOUTUS_SETTINGS'			=> 'About us settings',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Here you are able to define the text of the “About us”-page and enable or disable the “About us”-page.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Display terms of use',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Displays a link to the terms of use on the “About us”-page.',
	'ACP_PRIVACY_ENABLE' 				=> 'Display privacy policy',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Displays a link to the privacy policy on the “About us”-page.',

	'ACP_META_NOINDEX_ENABLE'			=> 'Meta noindex',
	'ACP_META_NOINDEX_ENABLE_EXPLAIN'	=> 'Tells search engine robots, that they must not index the “About us”-page. This option will not prevent robots from indexing the “About us”-page anyway!',

	'DESCRIPTION_PRIVACY'			=> 'You can see the privacy policy here:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'You can see the terms of use here:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'You can see the terms of use and privacy policy here:',

	'VIEWONLINE_ABOUTUS'	=> 'Viewing About us',
));
