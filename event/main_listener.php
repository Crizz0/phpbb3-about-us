<?php
/**
*
* @package phpBB Extension - Crizzo Simple Imprint
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace crizzo\simpleimprint\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class main_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'						=> 'load_language_on_setup',
			'core.page_header'						=> 'add_page_header_link',
			'core.viewonline_overwrite_location'	=> 'add_simpleimprint_viewonline',
		);
	}

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
	* @param \phpbb\controller\helper	$helper		Controller helper object
	* @param \phpbb\db\driver\driver_interface $db	Database object
	* @param \phpbb\template			$template	Template object
	* @param string						$php_ext	phpEx
	*/
	public function __construct(\phpbb\controller\helper $helper, \phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\user $user, $php_ext)
	{
		$this->helper = $helper;
		$this->db = $db;
		$this->template = $template;
		$this->user = $user;
		$this->php_ext = $php_ext;
	}

	public function load_language_on_setup($event)
	{	
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'crizzo/simpleimprint',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_header_link($event)
	{
		$this->template->assign_vars(array(
			'U_IMPRINT'	=> $this->helper->route('crizzo_simpleimprint'),
		));
	}

	public function add_simpleimprint_viewonline($event)
	{
		if ($event['row']['session_page'] === 'app.' . $this->php_ext . '/imprint' ||
			$event['row']['session_page'] === 'app.' . $this->php_ext . '/imprint.php')
		{
				$event['location'] = $this->user->lang('VIEWONLINE_SIMPLEIMPRINT');
				$event['location_url'] = $this->helper->route('crizzo_simpleimprint');
		}
	}
}
