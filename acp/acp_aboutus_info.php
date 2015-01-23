<?php
/**
*
* @package phpBB Extension - Crizzo About us
* @copyright (c) 2014 Crizzo - www.crizzo.de
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
			'version'	=> '2.0.3',
			'modes'		=> array(
			'config_aboutus'	=> array('title' => 'ACP_ABOUTUS_SETTINGS', 'auth' => 'ext_crizzo/aboutus && acl_a_board', 'cat' => array('ACP_ABOUTUS_SETTINGS')),
			),
		);
	}
}
