<?php /* Smarty version Smarty-3.1.18, created on 2015-10-10 00:04:07
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:329755ffc7d45436a3-27006917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1444428246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '329755ffc7d45436a3-27006917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ffc7d4573db1_92463779',
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffc7d4573db1_92463779')) {function content_55ffc7d4573db1_92463779($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="background">
<section>

<?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
    <article>
       
        <h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
        <img class="pictures" src="<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['image'];?>
"><br>
        
        <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
        
    </article>
<?php } ?>

</section>
</div><br>

<?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<br>
<br>
<br>
<br><?php }} ?>
