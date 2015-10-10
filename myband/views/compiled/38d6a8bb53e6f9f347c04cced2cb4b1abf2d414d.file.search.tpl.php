<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 23:49:25
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14174560bb23fbd8793-98015923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1444340950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14174560bb23fbd8793-98015923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bb23fbdabb2_21112903',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bb23fbdabb2_21112903')) {function content_560bb23fbdabb2_21112903($_smarty_tpl) {?><div class="search">
<form method="post" action="?action=search">
    <input type="text" name="search_string" value="Search for an article">
    <input type="submit" value="Search">
    </form></div><?php }} ?>
