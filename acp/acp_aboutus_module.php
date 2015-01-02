<?php
/**
*
* @package phpBB Extension - Crizzo About us
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace crizzo\aboutus\acp;

/**
* @ignore
*/


/**
* @package acp
*/
class acp_aboutus_module
{
	public $u_action;

	public function main($id, $mode)
	{
		global $user, $request, $template;
		global $config, $phpbb_root_path, $phpEx, $phpbb_container; 
		
		$user->add_lang(array('acp/board', 'posting'));
		
		$this->tpl_name = 'acp_aboutus';
		$this->page_title = 'ABOUTUS_SETTINGS';
		
		$form_name = 'ABOUTUS_setting';
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
		$aboutus_data	= $config_text->get_array(array(
		'aboutus_info',
		'aboutus_info_uid',
		'aboutus_info_bitfield',
		'aboutus_info_flags',
		));
		
		$aboutus_info	= $aboutus_data['aboutus_info'];
		$aboutus_info_uid	= $aboutus_data['aboutus_info_uid'];
		$aboutus_info_bitfield= $aboutus_data['aboutus_info_bitfield'];
		$aboutus_info_flags	= $aboutus_data['aboutus_info_flags'];
		
		if ($request->is_set_post('submit') || $request->is_set_post('preview'))
		{
			if (!check_form_key($form_name))
			{
				$error = $user->lang('FORM_INVALID');
			}
			$aboutus_info = $request->variable('aboutus_info', '', true);
			generate_text_for_storage(
				$aboutus_info,
				$aboutus_info_uid,
				$aboutus_info_bitfield,
				$aboutus_info_flags,
				!$request->variable('disable_bbcode', false),
				!$request->variable('disable_magic_url', false),
				!$request->variable('disable_smilies', false)
			);
			if (empty($error) && $request->is_set_post('submit'))
			{
				$config->set('acp_aboutus_termsofuse_enable', $request->variable('acp_aboutus_termsofuse_enable', false));
				$config->set('acp_aboutus_privacy_enable', $request->variable('acp_aboutus_privacy_enable', false));
				$config->set('acp_aboutus_enable', $request->variable('acp_aboutus_enable', false));

				$config_text->set_array(array(
				'aboutus_info'	=> $aboutus_info,
				'aboutus_info_uid'	=> $aboutus_info_uid,
				'aboutus_info_bitfield'	=> $aboutus_info_bitfield,
				'aboutus_info_flags'	=> $aboutus_info_flags,
				));
				trigger_error($user->lang['ABOUTUS_UPDATED'] . adm_back_link($this->u_action));
			}
		}
		
		$aboutus_info_preview = '';
		
		if ($request->is_set_post('preview'))
		{
			$aboutus_info_preview = generate_text_for_display($aboutus_info, $aboutus_info_uid, $aboutus_info_bitfield, $aboutus_info_flags);
		}
		$aboutus_edit = generate_text_for_edit($aboutus_info, $aboutus_info_uid, $aboutus_info_flags);
		
		$template->assign_vars(array(
			'ERRORS'						=> $error,
			'ACP_ABOUTUS_INFO'				=> $aboutus_edit['text'],
			'ACP_ABOUTUS_INFO_PREVIEW'		=> $aboutus_info_preview,
			'TERMS_OF_USE'					=> $config['acp_aboutus_termsofuse_enable'],
			'PRIVACY'						=> $config['acp_aboutus_privacy_enable'],
			'ABOUTUS_ENABLE'				=> $config['acp_aboutus_enable'],
			'S_BBCODE_DISABLE_CHECKED'		=> !$aboutus_edit['allow_bbcode'],
			'S_SMILIES_DISABLE_CHECKED'		=> !$aboutus_edit['allow_smilies'],
			'S_MAGIC_URL_DISABLE_CHECKED'	=> !$aboutus_edit['allow_urls'],
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
}
