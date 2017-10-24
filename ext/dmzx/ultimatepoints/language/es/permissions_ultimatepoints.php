<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2016 dmzx & posey - http://www.dmzx-web.net
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACL_CAT_POINTS'		=> 'Puntos Finales',
	'ACL_U_USE_POINTS'		=> 'Puede usar Puntos Finales',
	'ACL_U_USE_ROBBERY'		=> 'Puede usar el módulo de Robo',
	'ACL_U_USE_BANK'		=> 'Puede usar el módulo de Banco',
	'ACL_U_USE_LOGS'		=> 'Puede usar el módulo de registro',
	'ACL_U_USE_LOTTERY'		=> 'Puede usar el módulo de Lotería',
	'ACL_U_USE_TRANSFER'	=> 'Puede usar el módulo de Transferencia',
	'ACL_F_PAY_ATTACHMENT'	=> 'Tiene que pagar por descargar archivos adjuntos',
	'ACL_F_PAY_TOPIC'		=> 'Tiene que pagar por hacer un nuevo tema',
	'ACL_F_PAY_POST'		=> 'Tiene que pagar por hacer un nuevo mensaje',
	'ACL_M_CHG_POINTS'		=> 'Puede cambiar puntos de usuarios',
	'ACL_M_CHG_BANK'		=> 'Puede cambiar puntos del Banco de usuarios',
	'ACL_A_POINTS'			=> 'Puede administrar Puntos Finales',
));
