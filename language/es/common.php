<?php
/**
*
* @package phpBB Extension - Crizzo About us - Spanish
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'ABOUTUS'						=> 'Sobre nosotros',
	'ABOUTUS_SETTINGS'				=> 'Ajustes de Sobre nosotros',
	'ABOUTUS_UPDATED'				=> 'Sobre nosotros actualizado correctamente.',
	'ABOUTUS_AND'					=> 'y',

	'ACP_ABOUTUS_ENABLE' => 'Habilitar Sobre nosotros',
	'ACP_ABOUTUS_ENABLE_EXPLAIN' => 'Si la página "Sobre nosotros" esta deshabilitada, su foro no mostrará el enlace en el pie de página hacia la página "Sobre nosotros". Sin embargo con la URL "app.php/aboutus" si se podrá visitar la página "Sobre nosotros".',
	'ACP_ABOUTUS_INFO'				=> 'Texto de Sobre nosotros',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Puede editar el texto que será mostrado en la página Sobre nosotros.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Vista previa de Sobre nosotros',
	'ACP_ABOUTUS_SETTINGS'			=> 'Ajustes de Sobre nosotros',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Aquí puede definir el texto de la pa´gina "Sobre nosotros" y habilitar o deshabilitar la página "Sobre nosotros".',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Mostrar Condiciones de uso',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Mostrar un enlace a las Condiciones de uso en la página Sobre nosotros.',
	'ACP_PRIVACY_ENABLE' 				=> 'Mostrar Política de privacidad',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Mostrar un enlace a la Política de privacidad en la página Sobre nosotros.',

	'DESCRIPTION_PRIVACY'			=> 'Puede ver la Política de privacidad aquí:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Puede ver las Condiciones de uso aquí:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Puede ver la Política de privacidad y Condiciones de uso aquí:',

	'VIEWONLINE_ABOUTUS'	=> 'Viendo Sobre nosotros',
));
