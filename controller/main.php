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
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\db\driver\driver_interface $db	Database object
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	* @param string						$php_ext	phpEx
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\user $user, $php_ext)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->db = $db;
		$this->template = $template;
		$this->user = $user;
		$this->php_ext = $php_ext;
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
			'FORUM_NAME'	=> $this->user->lang['IMPRINT'],
			'U_VIEW_FORUM'	=> append_sid('imprint.' . $this->php_ext),
		));

		return $this->helper->render('imprint.html', $this->user->lang('IMPRINT'));
	}

	public function redirect()
	{
		redirect($this->helper->route('crizzo_simpleimprint'));
	}
	
	public function main($id, $mode)
	{
		global $user, $request, $template;
		global $config, $phpbb_root_path, $phpEx, $phpbb_container;
		$user->add_lang(array('acp/board', 'posting'));
		$this->tpl_name = 'acp_contact';
		$this->page_title = 'ACP_CONTACT_SETTINGS';
		$form_name = 'acp_contact';
		add_form_key($form_name);
		$error = '';
		if (!function_exists('display_custom_bbcodes'))
		{
		include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
		}
		if (!class_exists('parse_message'))
		{
		include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
		}
		$config_text = $phpbb_container->get('config_text');
		$simpleimprint_data	= $config_text->get_array(array(
		'simpleimprint_info',
		'simpleimprint_info_uid',
		'simpleimprint_info_bitfield',
		'simpleimprint_info_flags',
		));
		$simpleimprint_info	= $simpleimprint_data['simpleimprint_info'];
		$simpleimprint_info_uid	= $simpleimprint_data['simpleimprint_info_uid'];
		$simpleimprint_info_bitfield= $simpleimprint_data['simpleimprint_info_bitfield'];
		$simpleimprint_info_flags	= $simpleimprint_data['simpleimprint_info_flags'];
		if ($request->is_set_post('submit') || $request->is_set_post('preview'))
		{
			if (!check_form_key($form_name))
			{
			$error = $user->lang('FORM_INVALID');
			}
			$simpleimprint_info = $request->variable('simpleimprint_info', '', true);
			generate_text_for_storage(
				$simpleimprint_info,
				$simpleimprint_info_uid,
				$simpleimprint_info_bitfield,
				$simpleimprint_info_flags,
				!$request->variable('disable_bbcode', false),
				!$request->variable('disable_magic_url', false),
				!$request->variable('disable_smilies', false)
			);
			if (empty($error) && $request->is_set_post('submit'))
			{
			$config->set('simpleimprint_form_enable', $request->variable('simpleimprint_form_enable', false));
			$config_text->set_array(array(
				'simpleimprint_info'	=> $simpleimprint_info,
				'simpleimprint_info_uid'	=> $simpleimprint_info_uid,
				'simpleimprint_info_bitfield'	=> $simpleimprint_info_bitfield,
				'simpleimprint_info_flags'	=> $simpleimprint_info_flags,
			));
			trigger_error($user->lang['CONTACT_US_INFO_UPDATED'] . adm_back_link($this->u_action));
			}
		}
		$simpleimprint_info_preview = '';
		if ($request->is_set_post('preview'))
		{
		$simpleimprint_info_preview = generate_text_for_display($simpleimprint_info, $simpleimprint_info_uid, $simpleimprint_info_bitfield, $simpleimprint_info_flags);
		}
		$simpleimprint_edit = generate_text_for_edit($simpleimprint_info, $simpleimprint_info_uid, $simpleimprint_info_flags);
		$template->assign_vars(array(
			'ERRORS'						=> $error,
			'CONTACT_ENABLED'				=> $config['simpleimprint_form_enable'],
			'CONTACT_US_INFO'				=> $simpleimprint_edit['text'],
			'CONTACT_US_INFO_PREVIEW'		=> $simpleimprint_info_preview,
			'S_BBCODE_DISABLE_CHECKED'		=> !$simpleimprint_edit['allow_bbcode'],
			'S_SMILIES_DISABLE_CHECKED'		=> !$simpleimprint_edit['allow_smilies'],
			'S_MAGIC_URL_DISABLE_CHECKED'	=> !$simpleimprint_edit['allow_urls'],
			'BBCODE_STATUS'					=> $user->lang('BBCODE_IS_ON', '<a href="' . append_sid("{$phpbb_root_path}faq.$phpEx", 'mode=bbcode') . '">', '</a>'),
			'SMILIES_STATUS'				=> $user->lang['SMILIES_ARE_ON'],
			'IMG_STATUS'					=> $user->lang['IMAGES_ARE_ON'],
			'FLASH_STATUS'					=> $user->lang['FLASH_IS_ON'],
			'URL_STATUS'					=> $user->lang['URL_IS_ON'],
			'S_BBCODE_ALLOWED'				=> true,
			'S_SMILIES_ALLOWED'				=> true,
			'S_BBCODE_IMG'					=> true,
			'S_BBCODE_FLASH'				=> true,
			'S_LINKS_ALLOWED'				=> true,
		));
	// Assigning custom bbcodes
	display_custom_bbcodes();
	}

));

}