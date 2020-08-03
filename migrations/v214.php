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
								'module_basename'	=> '\crizzo\aboutus\acp\acp_aboutus_module',
								'modes'				=> array('tou', 'privacy'),
						),
					)),
				// Add new configs
				array('config.add' , array('aboutus_tou_enable', false)),
				array('config.add' , array('aboutus_pp_enable', false)),
				array('config.add' , array('aboutus_tou_show_on_main', false)),
				array('config.add' , array('aboutus_pp_show_on_main', false)),


				'add_tables'	=>array(
					// Terms of Use
					$this->table_prefix . 'aboutus_tou' => array(
								'COLUMNS'       => array(
									'tou_id'						=> array('UINT', null, 'auto_increment'),
									'tou_title'						=> array('VCHAR:200', ''),
									'lang_iso'						=> array('VCHAR:30', ''),
									'tou_content'					=> array('MTEXT_UNI', ''),
									'tou_contant_bbcode_uid'		=> array('VCHAR:255', ''),
									'tou_content_bbcode_bitfield'	=> array('VCHAR:255', ''),
									'tou_content_bbcode_options'	=> array('UINT:11', 7),
									'tou_content_allow_html'		=> array('BOOL', 0),
								),
							'PRIMARY_KEY'	=> 'tou_id',
						),
					// Privacy policy
					$this->table_prefix . 'aboutus_pp' => array(
						'COLUMNS'		=> array(
							'pp_id'							=> array('UINT', null, 'auto_increment'),
							'pp_title'						=> array('VCHAR:200', ''),
							'lang_iso'						=> array('VCHAR:30', ''),
							'pp_content'					=> array('MTEXT_UNI', ''),
							'pp_contant_bbcode_uid'         => array('VCHAR:255', ''),
							'pp_content_bbcode_bitfield'	=> array('VCHAR:255', ''),
							'pp_content_bbcode_options'		=> array('UINT:11', 7),
							'pp_content_allow_html'			=> array('BOOL', 0),
						),
						'PRIMARY_KEY'	=> 'pp_id',
					),
				),
		);
		return $data;
	}

	/**
	 * Drop the aboutus table schema from the database
	 *
	 * @return array Array of table schema
	 * @access public
	 */
	public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'aboutus_tou',
				$this->table_prefix . 'aboutus_pp',
			),
		);
	}
}
