<?php
/**
*
* @package phpBB Extension - Crizzo Simple Imprint
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_simpleimprint_settings
{
	public $u_action;

	public function main($id, $mode)
	{
		global $db, $user, $request, $template;
		global $config, $phpbb_root_path, $phpEx;

		$user->add_lang(array('acp/board', 'posting'));

		$this->tpl_name = 'acp_simpleimprint';
		$this->page_title = 'ACP_SIMPLEIMPRINT_SETTINGS';
		$form_name = 'acp_simpleimprint';
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

		$config_text = new \phpbb\config\db_text($db, CONFIG_TEXT_TABLE);

		$crizzo_simpleimprint_info			= $request->variable('crizzo_simpleimprint_info', $config_text->get('crizzo_simpleimprint_info'), true);
		$crizzo_simpleimprint_info_uid		= $config['crizzo_simpleimprint_info_uid'];
		$crizzo_simpleimprint_info_bitfield= $config['crizzo_simpleimprint_info_bitfield'];
		$crizzo_simpleimprint_info_flags	= $config['crizzo_simpleimprint_info_flags'];

		if ($request->is_set_post('submit') || $request->is_set_post('preview'))
		{
			if (!check_form_key($form_name))
			{
				$error = $user->lang('FORM_INVALID');
			}

			generate_text_for_storage(
				$crizzo_simpleimprint_info,
				$crizzo_simpleimprint_info_uid,
				$crizzo_simpleimprint_info_bitfield,
				$crizzo_simpleimprint_info_flags,
				!$request->variable('disable_bbcode', false),
				!$request->variable('disable_magic_url', false),
				!$request->variable('disable_smilies', false)
			);

			if (empty($error) && $request->is_set_post('submit'))
			{

				$config_text->set('crizzo_simpleimprint_info', $crizzo_simpleimprint_info);
				$config->set('crizzo_simpleimprint_info_uid', $crizzo_simpleimprint_info_uid);
				$config->set('crizzo_simpleimprint_info_bitfield', $crizzo_simpleimprint_info_bitfield);
				$config->set('crizzo_simpleimprint_info_flags', $crizzo_simpleimprint_info_flags);

				trigger_error($user->lang['CONTACT_US_INFO_UPDATED'] . adm_back_link($this->u_action));
			}
		}

		$crizzo_simpleimprint_info_preview = '';
		if ($request->is_set_post('preview'))
		{
			$crizzo_simpleimprint_info_preview = generate_text_for_display($crizzo_simpleimprint_info, $crizzo_simpleimprint_info_uid, $crizzo_simpleimprint_info_bitfield, $crizzo_simpleimprint_info_flags);
		}

		$crizzo_simpleimprint_edit = generate_text_for_edit($crizzo_simpleimprint_info, $crizzo_simpleimprint_info_uid, $crizzo_simpleimprint_info_flags);

		$template->assign_vars(array(
			'ERRORS'			=> $error,

			'CRIZZO_SIMPLEIMPRINT_INFO'			=> $crizzo_simpleimprint_edit['text'],
			'CRIZZO_SIMPLEIMPRINT_INFO_PREVIEW'	=> $crizzo_simpleimprint_info_preview,

			'S_BBCODE_CHECKED'		=> (!$crizzo_simpleimprint_edit['allow_bbcode']) ? ' checked="checked"' : '',
			'S_SMILIES_CHECKED'		=> (!$crizzo_simpleimprint_edit['allow_smilies']) ? ' checked="checked"' : '',
			'S_MAGIC_URL_CHECKED'	=> (!$crizzo_simpleimprint_edit['allow_urls']) ? ' checked="checked"' : '',

			'BBCODE_STATUS'			=> $user->lang('BBCODE_IS_ON', '<a href="' . append_sid("{$phpbb_root_path}faq.$phpEx", 'mode=bbcode') . '">', '</a>'),
			'SMILIES_STATUS'		=> $user->lang['SMILIES_ARE_ON'],
			'IMG_STATUS'			=> $user->lang['IMAGES_ARE_ON'],
			'FLASH_STATUS'			=> $user->lang['FLASH_IS_ON'],
			'URL_STATUS'			=> $user->lang['URL_IS_ON'],

			'S_BBCODE_ALLOWED'		=> true,
			'S_SMILIES_ALLOWED'		=> true,
			'S_BBCODE_IMG'			=> true,
			'S_BBCODE_FLASH'		=> true,
			'S_LINKS_ALLOWED'		=> true,
		));

		// Assigning custom bbcodes
		display_custom_bbcodes();
	}
}
