<?php
/**
*
* @package - Simple Imprint
* @version $Id$
* @copyright (c) 2007 Crizzo kontakt@crizzo.de http://www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/imprint');

// Adding links to the breadcrumbs
$template->assign_block_vars('navlinks', array(
 'FORUM_NAME' => $user->lang['IMPRINT_TITLE'], 
 'U_VIEW_FORUM' => append_sid("{$phpbb_root_path}imprint.$phpEx")));

page_header($user->lang['IMPRINT_TITLE']);

// Loading the template file
$template->set_filenames(array(
    'body' => 'imprint.html',
));

page_footer();

?>