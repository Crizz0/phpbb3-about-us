<?php
/**
*
* About us extension for the phpBB Forum Software package.
*
* @copyright (c) 2014-2015 Crizzo <http://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace crizzo\aboutus\migrations;

class v202 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\crizzo\aboutus\migrations\crizzo_aboutus_migrations',
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('acp_aboutus_termsofuse_enable', 1)),
			array('config.add', array('acp_aboutus_privacy_enable', 1)),
			array('config.add', array('acp_aboutus_enable', false)),
		);
	}
}
