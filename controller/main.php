<?php
/**
*
* About us extension for the phpBB Forum Software package.
*
* @copyright (c) 2014-2020 Crizzo <https://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
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

	/* @var \phpbb\language\language */
	protected $language;

	/**
	* Constructor
	*
	* @param \phpbb\config\config		$config
	* @param \phpbb\config\db_text		$config_text
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\template\template	$template
	* @param \phpbb\language\language	$language
	*/

	public function __construct(
		\phpbb\config\config $config,
		\phpbb\config\db_text $config_text,
		\phpbb\controller\helper $helper,
		\phpbb\template\template $template,
		\phpbb\language\language $language)
	{
		$this->config 	= $config;
		$this->config_text = $config_text;
		$this->helper 	= $helper;
		$this->template = $template;
		$this->language = $language;
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
			'FORUM_NAME'		=> $this->language->lang('ABOUTUS'),
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

			'META'				=> ($this->config['acp_aboutus_meta_noindex']) ? '<meta name="robots" content="noindex" />' : '',

			'ABOUTUS_ENABLE'	=> $this->config['acp_aboutus_enable'],
		));

		return $this->helper->render('aboutus.html', $this->language->lang('ABOUTUS'));
	}

	public function redirect()
	{
		redirect($this->helper->route('crizzo_aboutus'));
	}
}
