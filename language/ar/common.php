<?php
/**
*
* @package phpBB Extension - Crizzo About us - Arabic
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
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
	'ABOUTUS'						=> 'من نحن',
	'ABOUTUS_SETTINGS'				=> 'الإعدادات',
	'ABOUTUS_UPDATED'				=> 'تم التحديث بنجاح.',
	'ABOUTUS_AND'					=> 'و',

	'ACP_ABOUTUS_ENABLE'			=> 'تفعيل ',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'اختيارك "لا" يعني تعطيل هذا الخيار وبالتالي عدم إظهار رابط في أسفل المنتدى يحولك إلى صفحة "من نحن". وبالرغم من ذلك تستطيع زيارة صفحة "من نحن" عبر زيارة الرابط "app.php/aboutus".',
	'ACP_ABOUTUS_INFO'				=> 'النص',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'تستطيع هنا تعديل النص الذي سيظهر في صفحة "من نحن".',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'استعراض',
	'ACP_ABOUTUS_SETTINGS'			=> 'إعدادات من نحن',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'تستطيع هنا كتابة النص الذي تريده في صفحة "من نحن" وكذلك تفعيل أو تعطيل الإضافة.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'إظهار شروط الإستخدام',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'سيتم إظهار رابط في صفحة "من نحن" يحولك إلى شروط الإستخدام عند النقر عليه.',
	'ACP_PRIVACY_ENABLE' 				=> 'إظهار سياسة الخصوصية',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'سيتم إظهار رابط في صفحة "من نحن" يحولك إلى سياسة الخصوصية عند النقر عليه.',

	'DESCRIPTION_PRIVACY'			=> 'تستطيع مُشاهدة سياسة الخصوصية هنا :',
	'DESCRIPTION_TERMS_OF_USE'		=> 'تستطيع مُشاهدة شروط الإستخدام هنا :',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'تستطيع مُشاهدة شروط الإستخدام و سياسة الخصوصية هنا :',

	'VIEWONLINE_ABOUTUS'	=> 'مُشاهدة من نحن',
));
