<?php
/**
*
* @package phpBB Extension - Crizzo About us - English
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* French translation by ForumsFaciles (http://www.forumsfaciles.f) 2015-01-25
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'A propos',
	'ABOUTUS_SETTINGS'				=> 'Paramètres de "A propos"',
	'ABOUTUS_UPDATED'				=> '"A propos" mis à jour avec succès.',
	'ABOUTUS_AND'					=> 'et',

	'ACP_ABOUTUS_ENABLE'			=> 'Activer "A propos"',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Si la page "A propos" est désactivée, votre forum n\'affichera pas de lien "A propos" dans le pied de page. Néanmoins, avec l\'URL "app.php/aboutus" vous serez en mesure de consulter la page "A propos". ',
	'ACP_ABOUTUS_INFO'				=> 'Texte de la page "A propos"',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Vous pouvez modifier le texte qui est affiché sur la page "A propos".',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Aperçu de la page "A propos"',
	'ACP_ABOUTUS_SETTINGS'			=> 'Paramètres de "A propos"',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Ici vous pouvez définir le texte de la page "A propos" et activer ou désactiver la page.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Afficher les conditions d\'utilisation',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Affiche un lien vers les conditions d\'utilisation sur la page "A propos".',
	'ACP_PRIVACY_ENABLE' 				=> 'Afficher la politique de la vie privée',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Affiche un lien vers la politique de la vie privée sur la page "A propos".',

	'DESCRIPTION_PRIVACY'			=> 'Vous pouvez consulter la politique de la vie privée ici:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Vous pouvez consulter les conditions d\'utilisation:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Vous pouvez consulter les conditions d\'utilisation et la politique de la vie privée ici:',

	'VIEWONLINE_ABOUTUS'	=> 'Consulte la page "A propos"',
));
