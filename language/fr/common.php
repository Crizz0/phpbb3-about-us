<?php
/**
*
* About us extension for the phpBB Forum Software package.
* French by ForumsFaciles (http://www.forumsfaciles.f) & Galixte (http://www.galixte.com)
*
* @copyright (c) 2014-2015 Crizzo <http://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'ABOUTUS'						=> 'À propos',
	'ABOUTUS_SETTINGS'				=> 'Paramètres de « À propos »',
	'ABOUTUS_UPDATED'				=> 'L’extension « À propos » a été mise à jour avec succès.',
	'ABOUTUS_AND'					=> 'et',

	'ACP_ABOUTUS_ENABLE'			=> 'Activer l’extension « À propos »',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Si la page « À propos » est désactivée, son lien dans le pied de page ne sera pas affiché. Néanmoins, avec l’adresse URL « app.php/aboutus » ou « /aboutus » il sera possible de consulter cette page. ',
	'ACP_ABOUTUS_INFO'				=> 'Texte de la page « À propos »',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Éditeur complet et aperçu du texte qui sera affiché sur la page « À propos ».',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Aperçu de la page « À propos »',
	'ACP_ABOUTUS_SETTINGS'			=> 'Paramètres',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Sur cette page il est possible de rédiger le contenu de la page « À propos » et de gérer son activation ou sa désactivation.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Afficher les conditions d’utilisation',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Affiche un lien vers les conditions d’utilisation sur la page « À propos ».',
	'ACP_PRIVACY_ENABLE' 				=> 'Afficher la politique de la vie privée',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Affiche un lien vers la politique de la vie privée sur la page « À propos ».',

	'DESCRIPTION_PRIVACY'			=> 'Consulter la politique de la vie privée :',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Consulter les conditions d’utilisation :',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Consulter les conditions d’utilisation et la politique de la vie privée :',

	'VIEWONLINE_ABOUTUS'	=> 'Consulte la page « À propos »',
));
