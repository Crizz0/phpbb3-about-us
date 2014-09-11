<?php
/**
*
* @package phpBB Extension - Crizzo About Us
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
			'version'	=> '2.0.0-dev',
			'modes'		=> array(
				'config_aboutus'	=> array('title' => 'ACP_ABOUTUS_SETTINGS', 'auth' => 'ext_crizzo/aboutus && acl_a_board', 'cat' => array('ACP_ABOUTUS_SETTINGS')),
			),
		);
	}
}
