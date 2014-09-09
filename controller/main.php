<?php
/**
*
* @package phpBB Extension - Crizzo Simple Imprint
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace crizzo\simpleimprint\controller;

/**
* @ignore
*/

class main
{
	/* @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\config\db_text */
	protected $config_text;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\db\driver\driver_interface */
	protected $db;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/* @var string phpEx */
	protected $php_ext;
	/**
	* Constructor
	*
	* @param \phpbb\config\config		$config
	* @param \phpbb\config\db_text		$config_text
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\db\driver\driver_interface $db	Database object
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	* @param string						$php_ext	phpEx
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\config\db_text $config_text, \phpbb\controller\helper $helper, \phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\user $user, $php_ext)
	{
		$this->config 	= $config;
		$this->helper 	= $helper;
		$this->db 		= $db;
		$this->template = $template;
		$this->user 	= $user;
		$this->php_ext 	= $php_ext;
		$this->config_text = $config_text;
	}

	/**
	* Controller for route app.php/imprint.php and /imprint
	*
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function base()
	{
		// Adding links to the breadcrumbs
		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME'		=> $this->user->lang['IMPRINT'],
			'U_VIEW_FORUM'		=> append_sid('imprint.' . $this->php_ext),
		));
		
			$simpleimprint_data			= $this->config_text->get_array(array(
				'simpleimprint_info',
				'simpleimprint_info_uid',
				'simpleimprint_info_bitfield',
				'simpleimprint_info_flags',
			));

			$simpleimprint_text = generate_text_for_display(
				$simpleimprint_data['simpleimprint_info'],
				$simpleimprint_data['simpleimprint_info_uid'],
				$simpleimprint_data['simpleimprint_info_bitfield'],
				$simpleimprint_data['simpleimprint_info_flags']
			);

		$this->template->assign_vars(array(
			'IMPRINT_OUTPUT'	=> $simpleimprint_text,
		));

		return $this->helper->render('imprint.html', $this->user->lang('IMPRINT'));
	}

	public function redirect()
	{
		redirect($this->helper->route('crizzo_simpleimprint'));
	}

}