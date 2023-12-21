<?php
/**
*
* About us extension for the phpBB Forum Software package.
*
* @copyright (c) 2014-2020 Crizzo <https://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace crizzo\aboutus\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class main_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return array(
			'core.user_setup'						=> 'load_language_on_setup',
			'core.page_header'						=> 'add_page_header_link',
			'core.viewonline_overwrite_location'	=> 'add_aboutus_viewonline',
		);
	}
	/** @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\language\language */
	protected $language;

	/* @var string phpEx */
	protected $php_ext;

	/**
	* Constructor
	*
	* @param \phpbb\controller\helper	$helper		Controller helper object
	* @param \phpbb\template\template	$template	Template object
	* @param \phpbb\language\language	$language
	* @param string						$php_ext	phpEx
	*/
	public function __construct(
		\phpbb\config\config $config,
		\phpbb\controller\helper $helper,
		\phpbb\template\template $template,
		\phpbb\language\language $language,
		$php_ext)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->template = $template;
		$this->language = $language;
		$this->php_ext = $php_ext;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'crizzo/aboutus',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_header_link()
	{
		$this->template->assign_vars(array(
			'U_ABOUTUS'			=> $this->helper->route('crizzo_aboutus'),
			'ABOUTUS_ENABLE'	=> $this->config['acp_aboutus_enable'],
		));
	}

	public function add_aboutus_viewonline($event)
	{
		if ($event['row']['session_page'] === 'app.' . $this->php_ext . '/aboutus' ||
			$event['row']['session_page'] === 'app.' . $this->php_ext . '/aboutus.php')
		{
				$event['location'] = $this->language->lang('VIEWONLINE_ABOUTUS');
				$event['location_url'] = $this->helper->route('crizzo_aboutus');
		}
	}
}
