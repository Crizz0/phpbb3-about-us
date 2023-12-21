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

class v213 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return array(
			'\crizzo\aboutus\migrations\v202',
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('acp_aboutus_meta_noindex', 0)),
		);
	}
}
