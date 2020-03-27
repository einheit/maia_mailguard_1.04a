<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:39
  from '/var/www/html/maia/themes/desert_sand/templates/adminindex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1ca7eb39c7_91783138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7512d94fcbbe9d0a277816f641ddb54de2b0c733' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/adminindex.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html_head.tpl' => 1,
    'file:html_foot.tpl' => 1,
  ),
),false)) {
function content_5e7d1ca7eb39c7_91783138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_admin_menu'];?>
</legend>
<ol>

<li>
<a href="adminusers.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_users'];?>
 </a>
</li>

<li>
<a href="admindomains.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_domains'];?>
 </a>
</li>

<?php if ($_smarty_tpl->tpl_vars['super']->value) {?>
<li>
<a href="adminviruses.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_viruses'];?>
 </a>
</li>

<li>
<a href="adminlanguages.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_languages'];?>
 </a>
</li>

<li>
<a href="adminthemes.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_themes'];?>
 </a>
</li>

<li>
<a href="adminsystem.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_system'];?>
 </a>
</li>

<?php if ($_smarty_tpl->tpl_vars['enable_stats_tracking']->value) {?>
<li>
<a href="adminstats.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_statistics'];?>
 </a>
</li>
<?php }?>

<?php }?>

<li>
<a href="adminhelp.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="new"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_help'];?>
 </a>
</li>
</ol>
</fieldset>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:html_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
