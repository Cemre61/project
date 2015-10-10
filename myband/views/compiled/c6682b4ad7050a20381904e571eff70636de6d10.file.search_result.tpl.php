<?php /* Smarty version Smarty-3.1.18, created on 2015-10-10 00:10:24
         compiled from "views\search_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14772560bb792189475-10151300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6682b4ad7050a20381904e571eff70636de6d10' => 
    array (
      0 => 'views\\search_result.tpl',
      1 => 1444428621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14772560bb792189475-10151300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bb7921cff44_57286465',
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bb7921cff44_57286465')) {function content_560bb7921cff44_57286465($_smarty_tpl) {?><div class="background">
  <h1>You have searched for the following:</h1>
   
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
</div>
<br>
<br><?php }} ?>
