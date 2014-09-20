<?php
/**
*
* @package phpBB Extension - Crizzo About us (English)
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
	'ABOUTUS'						=> 'About us',
	'ABOUTUS_SETTINGS'				=> 'About us settings',
	'ABOUTUS_UPDATED'				=> 'About us was successfully updated.',

	'ACP_ABOUTUS_ENABLE'			=> 'About us',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> '"Enabled" displays the link in the footer and the page to the user. "Disabled" does the opposite but will not delete your About us text.',
	'ACP_ABOUTUS_INFO'				=> 'About us text',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'You can edit the text which is displayed on the About us page.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'About us Preview',
	'ACP_ABOUTUS_SETTINGS'			=> 'About us settings',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Here you are able to define the text of the "About us" page and enable or disable the "About us"-page.',

	'VIEWONLINE_ABOUTUS'	=> 'Viewing About us',
));
