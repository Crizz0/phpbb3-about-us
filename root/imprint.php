<?php
/**
*
* @package - Simple Imprint
* @version $Id$
* @copyright (c) 2007 blackhawk.87 kontakt@crizzo.de http://www.victorypoint.de
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


page_header($user->lang['IMPRINT_TITLE']);

$template->set_filenames(array(
    'body' => 'imprint.html',
));

page_footer();

?>