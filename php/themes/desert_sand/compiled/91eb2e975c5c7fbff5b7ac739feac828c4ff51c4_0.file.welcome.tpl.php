<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:31
  from '/var/www/html/maia/themes/desert_sand/templates/welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1c9f036c56_13791340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91eb2e975c5c7fbff5b7ac739feac828c4ff51c4' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/welcome.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html_head.tpl' => 1,
    'file:welcome/_protection.tpl' => 1,
    'file:welcome/_quickview.tpl' => 1,
    'file:welcome/_stats.tpl' => 1,
    'file:html_foot.tpl' => 1,
  ),
),false)) {
function content_5e7d1c9f036c56_13791340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="rightpanel">
   <?php $_smarty_tpl->_subTemplateRender("file:welcome/_protection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <div id="welcome"><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_greeting'];?>
</h2>
    <?php if ($_smarty_tpl->tpl_vars['firsttime']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_first_time'];?>

    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_intro'];?>

   </div>
 </div>
<div id="maincontent">
<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
<div id="messagebox" align="center">
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }?>

 <?php $_smarty_tpl->_subTemplateRender("file:welcome/_quickview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:welcome/_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
  </div>
 <?php $_smarty_tpl->_subTemplateRender("file:html_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
