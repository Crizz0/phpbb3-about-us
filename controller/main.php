<?php
/**
*
* @package phpBB Extension - Crizzo About us
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace crizzo\aboutus\controller;

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
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	* @param string						$php_ext	phpEx
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\config\db_text $config_text, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user, $php_ext)
	{
		$this->config 	= $config;
		$this->helper 	= $helper;
		$this->template = $template;
		$this->user 	= $user;
		$this->php_ext 	= $php_ext;
		$this->config_text = $config_text;
	}

	/**
	* Controller for route app.php/aboutus.php and /aboutus
	*
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function base()
	{
		// Adding links to the breadcrumbs
		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME'		=> $this->user->lang['ABOUTUS'],
			'U_VIEW_FORUM'		=> $this->helper->route('crizzo_aboutus'),
		));
		
		$aboutus_data			= $this->config_text->get_array(array(
				'aboutus_info',
				'aboutus_info_uid',
				'aboutus_info_bitfield',
				'aboutus_info_flags',
		));

		$aboutus_text = generate_text_for_display(
			$aboutus_data['aboutus_info'],
			$aboutus_data['aboutus_info_uid'],
			$aboutus_data['aboutus_info_bitfield'],
			$aboutus_data['aboutus_info_flags']
		);

		$this->template->assign_vars(array(
			'ABOUTUS_OUTPUT'	=> $aboutus_text,
			'TERMS_OF_USE'		=> $this->config['acp_aboutus_termsofuse_enable'],
			'PRIVACY'			=> $this->config['acp_aboutus_privacy_enable'],
			'ABOUTUS_ENABLE'	=> $this->config['acp_aboutus_enable'],
		));

		return $this->helper->render('aboutus.html', $this->user->lang('ABOUTUS'));
	}

	public function redirect()
	{
		redirect($this->helper->route('crizzo_aboutus'));
	}

}