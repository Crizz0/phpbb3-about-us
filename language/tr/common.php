<?php
/**
*
* About us extension for the phpBB Forum Software package.
* Turkish Translation: ByRz ( DrByRz ) - http://www.saglikforum.org
*
* @copyright (c) 2014-2020 Crizzo <http://www.crizzo.de>
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
	'ABOUTUS'					=> 'Hakkımızda',
	'ABOUTUS_SETTINGS'				=> 'Hakkımızda ayarları',
	'ABOUTUS_UPDATED'				=> 'Hakkımızda başarıyla güncellendi.',
	'ABOUTUS_AND'					=> 've',

	'ACP_ABOUTUS_ENABLE'			=> 'Hakkımızda sayfasını aktive et',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'		=> 'Eğer “Hakkımızda” sayfası kapatılırsa “Hakkımızda” sayfası bağlantısı sitenizin altında gösterilmeyecek. Ne var ki “app.php/aboutus” URL\'si ile “Hakkımızda” sayfasına ulaşabilirsiniz.',
	'ACP_ABOUTUS_INFO'			=> 'Hakkımızda metni',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Hakkımızda sayfasında gösterilecek metni buradan düzenleyebilirsiniz.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Hakkımızda önizleme',
	'ACP_ABOUTUS_SETTINGS'			=> 'Hakkımızda ayarları',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'		=> 'Buradan “Hakkımızda” sayfasının metnini belirleyebilir ve “Hakkımızda”-sayfasını aktive ve deaktive edebilirsiniz.',

	'ACP_TERMS_OF_USE_ENABLE' 		=> 'Kullanım şartlarını göster',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Hakkımızda sayfasında kullanım şartlarına bir bağlantı göster.',
	'ACP_PRIVACY_ENABLE' 			=> 'Gizlilik politikasını göster',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Hakkımızda sayfasında gizlilik politikasına bir bağlantı göster.',

	'ACP_META_NOINDEX_ENABLE'		=> 'Meta indeksleme yok',
	'ACP_META_NOINDEX_ENABLE_EXPLAIN'	=> 'Arama motoru robotlarına “Hakkımızda”-sayfasını indekslememeleri gerektiğini anlatır. Bu seçenek, robotların “Hakkımızda” sayfasını dizine eklemesini kesin olarak engellemez!',

	'DESCRIPTION_PRIVACY'			=> 'Gizlilik politikamızı buradan görebilirsiniz:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Buradan kullanım şartlarını görebilirsiniz:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'	=> 'Buradan kullanım şartları ve gizlilik politikasını görebilirsiniz:',

	'VIEWONLINE_ABOUTUS'	=> 'Hakkımızda sayfasını görüntülüyor',
));
