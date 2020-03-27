<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 15:50:27
  from '/var/www/html/maia/themes/desert_sand/templates/logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d31b30162e3_63949370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc996893c7dc7d45e1c6e93449d74fbd2191bd66' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/logout.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login_head.tpl' => 1,
    'file:login_foot.tpl' => 1,
  ),
),false)) {
function content_5e7d31b30162e3_63949370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div align="center">
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td valign="top" class="messagebox" align="center">
<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_logged_out'];?>
<br>
<br>
<a href="login.php?prevlang=<?php echo $_smarty_tpl->tpl_vars['display_language']->value;?>
">[ <?php echo $_smarty_tpl->tpl_vars['lang']->value['link_login'];?>
]</a>
</td>
</tr>
</table>
</div><br>

<?php $_smarty_tpl->_subTemplateRender("file:login_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
