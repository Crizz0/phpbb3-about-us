<?php
/**
*
* @package phpBB Extension - Crizzo About us - Turkish
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
	'ABOUTUS'						=> 'Hakkımızda',
	'ABOUTUS_SETTINGS'				=> 'Hakkımızda ayarları',
	'ABOUTUS_UPDATED'				=> 'Hakkımızda başarıyla güncellendi.',
	'ABOUTUS_AND'					=> 've',
	
	'ACP_ABOUTUS_ENABLE'			=> 'Hakkımızda sayfasını aktive et',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Eğer "Hakkımızda" sayfası kapatılırsa "Hakkımızda" sayfası linki sitenizin altında gösterilmeyecek. Ne var ki "app.php/aboutus" URLsi ile "Hakkımızda" sayfasına ualaşabilirsiniz. ',
	'ACP_ABOUTUS_INFO'				=> 'Hakkımızda metni',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Hakkımızda sayfasında gösterilecek metni buradan düzenleyebilirsiniz.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Hakkımızda önizleme',
	'ACP_ABOUTUS_SETTINGS'			=> 'Hakkımızda ayarları',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Buradan "Hakkımızda" sayfasının metnini belirleyebilir ve "Hakkımızda"-sayfasını aktive ve deaktive edebilirsiniz.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Kullanım şartlarını göster',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Hakkımızda sayfasında kullanım şartlarına bir bağlantı göster.',
	'ACP_PRIVACY_ENABLE' 				=> 'Gizlilik politikasını göster',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Hakkımızda sayfasında gizlilik politikasına bir bağlantı göster.',

	'DESCRIPTION_PRIVACY'			=> 'Gizlilik politikamızı buradan görebilirsiniz:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Buradan kullanım şartlarını görebilirsiniz:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Buradan kullanım şartları ve gizlilik politikasını görebilirsiniz:',

	'VIEWONLINE_ABOUTUS'	=> 'Hakkımızda sayfasını görüntülüyor',
));
