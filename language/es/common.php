<?php
/**
*
* About us extension for the phpBB Forum Software package.
* Spanish Translation: ThE KuKa ( Raúl Arroyo ) - https://www.phpbb-es.com
*
* @copyright (c) 2014-2020 Crizzo <https://www.crizzo.de>
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'Sobre nosotros',
	'ABOUTUS_SETTINGS'				=> 'Ajustes de Sobre nosotros',
	'ABOUTUS_UPDATED'				=> 'Sobre nosotros actualizado correctamente.',
	'ABOUTUS_AND'					=> 'y',

	'ACP_ABOUTUS_ENABLE' 			=> 'Habilitar Sobre nosotros',
	'ACP_ABOUTUS_ENABLE_EXPLAIN' 	=> 'Si la página “Sobre nosotros” esta deshabilitada, su foro no mostrará el enlace en el pie de página hacia la página “Sobre nosotros”. Sin embargo con la URL “app.php/aboutus” si se podrá visitar la página “Sobre nosotros”.',
	'ACP_ABOUTUS_INFO'				=> 'Texto de Sobre nosotros',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Puede editar el texto que será mostrado en la página “Sobre nosotros”.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Vista previa de Sobre nosotros',
	'ACP_ABOUTUS_SETTINGS'			=> 'Ajustes de Sobre nosotros',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Aquí puede definir el texto de la página “Sobre nosotros” y habilitar o deshabilitar la página “Sobre nosotros”.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Mostrar Condiciones de uso',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Mostrar un enlace a las Condiciones de uso en la página “Sobre nosotros”.',
	'ACP_PRIVACY_ENABLE' 				=> 'Mostrar Política de privacidad',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Mostrar un enlace a la Política de privacidad en la página “Sobre nosotros”.',

	'ACP_META_NOINDEX_ENABLE'			=> 'Meta noindex',
	'ACP_META_NOINDEX_ENABLE_EXPLAIN'	=> 'Dice a los robots de los motores de búsqueda que no deben indexar la página “Sobre nosotros”. ¡Esta opción no evitará que los robots indexen la página “Sobre nosotros” de todos modos!',

	'DESCRIPTION_PRIVACY'			=> 'Puede ver la Política de privacidad aquí:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Puede ver las Condiciones de uso aquí:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Puede ver la Política de privacidad y Condiciones de uso aquí:',

	'VIEWONLINE_ABOUTUS'	=> 'Viendo Sobre nosotros',
));
