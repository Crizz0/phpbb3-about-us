<?php
/**
*
* @package phpBB Extension - Crizzo About us
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace crizzo\aboutus\migrations;

class v202 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('acp_aboutus_termsofuse_enable', 1)),
			array('config.add', array('acp_aboutus_privacy_enable', 1)),
			array('config.add', array('acp_aboutus_enable', false)),
		);
	}
}
