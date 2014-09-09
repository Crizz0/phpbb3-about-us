<?php
/**
*
* @package phpBB Extension - Crizzo Simple Imprint
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace crizzo\simpleimprint\acp;

class acp_imprint_info
{
	function module()
	{
		return array(
			'filename'	=> '\crizzo\simpleimprint\acp\acp_imprint_module',
			'title'		=> 'SIMPLE_IMPRINT_SETTINGS',
			'version'	=> '2.0.0-dev',
			'modes'		=> array(
				'config_simpleimprint'	=> array('title' => 'SIMPLE_IMPRINT_SETTINGS', 'auth' => 'ext_crizzo/simpleimprint && acl_a_board', 'cat' => array('SIMPLE_IMPRINT_SETTINGS')),
			),
		);
	}
}
