<?php

/**
*
* @package phpBB Extension - Crizzo Simple Imprint
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace crizzo\simpleimprint\migrations;

class crizzo_simpleimprint_migrations extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['simpleimprint_enable']);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('simpleimprint_enable', 1)),
			array('config_text.add', array('simpleimprint_info', '')),
			array('config_text.add', array('simpleimprint_info_uid', '')),
			array('config_text.add', array('simpleimprint_info_bitfield', '')),
			array('config_text.add', array('simpleimprint_info_flags', OPTION_FLAG_BBCODE + OPTION_FLAG_SMILIES + OPTION_FLAG_LINKS)),
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS','SIMPLE_IMPRINT_SETTINGS')),
			array('module.add', array('acp', 'SIMPLE_IMPRINT_SETTINGS', array(
				'module_basename' => '\crizzo\simpleimprint\acp\acp_imprint_module',
				'modes' => array('config_simpleimprint'),
			))),
		);
	}
}
