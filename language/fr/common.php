<?php
/**
*
* @package phpBB Extension - Crizzo About us - French
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translated into French by ForumsFaciles (http://www.forumsfaciles.f) & Galixte (http://www.galixte.com)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'A propos',
	'ABOUTUS_SETTINGS'				=> 'Paramètres de « A propos »',
	'ABOUTUS_UPDATED'				=> 'L’extension « A propos » a été mise à jour avec succès.',
	'ABOUTUS_AND'					=> 'et',

	'ACP_ABOUTUS_ENABLE'			=> 'Activer l’extension « A propos »',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Si la page « A propos » est désactivée, son lien dans le pied de page ne sera pas affiché. Néanmoins, avec l’adresse URL « app.php/aboutus » ou « /aboutus » il sera possible de consulter cette page. ',
	'ACP_ABOUTUS_INFO'				=> 'Texte de la page « A propos »',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Éditeur complet et aperçu du texte qui sera affiché sur la page « A propos ».',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Aperçu de la page « A propos »',
	'ACP_ABOUTUS_SETTINGS'			=> 'Paramètres de « A propos »',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Activation ou désactivation de la page « A propos » et modification de son texte.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Afficher les conditions d’utilisation',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Affiche un lien vers les conditions d’utilisation sur la page « A propos ».',
	'ACP_PRIVACY_ENABLE' 				=> 'Afficher la politique de la vie privée',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Affiche un lien vers la politique de la vie privée sur la page « A propos ».',

	'DESCRIPTION_PRIVACY'			=> 'Consulter la politique de la vie privée :',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Consulter les conditions d’utilisation :',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Consulter les conditions d’utilisation et la politique de la vie privée :',

	'VIEWONLINE_ABOUTUS'	=> 'Consulte la page « A propos »',
));
