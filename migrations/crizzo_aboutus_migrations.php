<?php
/**
*
* @package phpBB Extension - Crizzo About us
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace crizzo\aboutus\migrations;

class crizzo_aboutus_migrations extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['aboutus_enable']);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('aboutus_enable', false)),
			array('config_text.add', array('aboutus_info', '')),
			array('config_text.add', array('aboutus_info_uid', '')),
			array('config_text.add', array('aboutus_info_bitfield', '')),
			array('config_text.add', array('aboutus_info_flags', OPTION_FLAG_BBCODE + OPTION_FLAG_SMILIES + OPTION_FLAG_LINKS)),
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS','ACP_ABOUTUS_SETTINGS')),
			array('module.add', array('acp', 'ACP_ABOUTUS_SETTINGS', array(
				'module_basename' => '\crizzo\aboutus\acp\acp_aboutus_module',
				'modes' => array('config_aboutus'),
			))),
		);
	}
}
