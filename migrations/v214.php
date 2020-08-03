<?php
/**
 *
 * About us extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014-2019 Crizzo <http://www.crizzo.de>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace crizzo\aboutus\migrations;

class v214 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\crizzo\aboutus\migrations\v213',
		);
	}

	public function update_data()
	{
		$data = array(
				array('module.add', array(
					'acp',
					'ACP_ABOUTUS_SETTINGS',
					array(
							'module_basename'   => '\crizzo\aboutus\acp\acp_aboutus_module',
							'modes'             => array('tou', 'privacy'),
					),
				)),
				// Add new configs
				array('config.add' , array('aboutus_tou_enable', false)),
				array('config.add' , array('aboutus_pp_enable', false)),
				array('config.add' , array('aboutus_tou_show_on_main', false)),
				array('config.add' , array('aboutus_pp_show_on_main', false)),

				// ToU
				array('config_text.add', array('aboutus_tou', '')),
				array('config_text.add', array('aboutus_tou_uid', '')),
				array('config_text.add', array('aboutus_tou_bitfield', '')),
				array('config_text.add', array('aboutus_tou_flags', OPTION_FLAG_BBCODE + OPTION_FLAG_SMILIES + OPTION_FLAG_LINKS)),
				// Privacy policy
				array('config_text.add', array('aboutus_pp', '')),
				array('config_text.add', array('aboutus_pp_uid', '')),
				array('config_text.add', array('aboutus_pp_bitfield', '')),
				array('config_text.add', array('aboutus_pp_flags', OPTION_FLAG_BBCODE + OPTION_FLAG_SMILIES + OPTION_FLAG_LINKS)),
		);
		return $data;
	}
}
