<?php
/**
*
* About us extension for the phpBB Forum Software package.
*
* @copyright (c) 2014-2017 Crizzo <http://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace crizzo\aboutus\acp;

class acp_aboutus_info
{
	function module()
	{
		return array(
			'filename'	=> '\crizzo\aboutus\acp\acp_aboutus_module',
			'title'		=> 'ACP_ABOUTUS_SETTINGS',
			'version'	=> '2.1.2',
			'modes'		=> array(
			'config_aboutus'	=> array('title' => 'ACP_ABOUTUS_SETTINGS', 'auth' => 'ext_crizzo/aboutus && acl_a_board', 'cat' => array('ACP_ABOUTUS_SETTINGS')),
			),
		);
	}
}
