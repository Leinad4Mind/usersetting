<?php
/**
*
* @package BruninoIt - Users Setting
* @copyright (c) 2014 brunino
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
  'ACP_US_TITLE'	=> 'Global',
  'ACP_US_CATEGORY'	=> 'Users Settings',
));
