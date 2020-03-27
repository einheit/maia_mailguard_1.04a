<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:19:56
  from '/var/www/html/maia/themes/desert_sand/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1c7cc47ec6_64829999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '976966c184588aacdc921cb52acd88c78ee11cb0' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/login.tpl',
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
function content_5e7d1c7cc47ec6_64829999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="post" id="loginform" name="login" action="xlogin.php">
<input type="hidden" name="super" value="<?php echo $_smarty_tpl->tpl_vars['super']->value;?>
">
<input type="hidden" name="offset" value="0">

<?php echo '<script'; ?>
 type="text/javascript">
<!--
  var server_timestamp = <?php echo $_smarty_tpl->tpl_vars['server_timestamp']->value;?>
;
  var client_timestamp = new Date();
  var offset = server_timestamp - Math.floor((client_timestamp.getTime() + client_timestamp.getTimezoneOffset() * 60 * 1000) / 1000);
  document.login.offset.value = offset;
// -->
<?php echo '</script'; ?>
>

<?php if (!$_smarty_tpl->tpl_vars['display_language_is_default']->value) {?>
<input type="hidden" name="language" value="<?php echo $_smarty_tpl->tpl_vars['display_language']->value;?>
">
<?php }?>
<input type="hidden" name="charset" value="<?php echo $_smarty_tpl->tpl_vars['html_charset']->value;?>
">

<table border="0" cellspacing="2" cellpadding="2">

<tr>
<td colspan="3" style="font-size: 110%; background: #dddddd;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['banner_subtitle'];?>
</strong></td>
</tr>

<?php if (($_smarty_tpl->tpl_vars['auth_method']->value == "pop3" && $_smarty_tpl->tpl_vars['routing_domain']->value) || $_smarty_tpl->tpl_vars['auth_method']->value == "ldap" || $_smarty_tpl->tpl_vars['auth_method']->value == "exchange" || $_smarty_tpl->tpl_vars['auth_method']->value == "sql" || $_smarty_tpl->tpl_vars['auth_method']->value == "internal" || $_smarty_tpl->tpl_vars['auth_method']->value == "external") {?> 
<tr>
<td width="30%" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label_username'];?>
</td>
<td width="40%"><input type="text" id="login" name="username" value="" size="20"></td>
<td width="30%">&nbsp;</td>
</tr>
<?php } else { ?>
<tr>
<td width="30%" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label_email'];?>
</td>
<td width="40%"><input type="text" id="login" name="address" value="" size="20"></td>
<td width="30%">&nbsp;</td>
</tr>
<?php }?>

<tr>
<td width="30%" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label_password'];?>
</td>
<td width="40%"><input type="password" name="pwd" value="" size="20"></td>
<td width="30%">&nbsp;</td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['auth_method']->value == "exchange") {
if ($_smarty_tpl->tpl_vars['nt_domain']->value) {?>
<input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['nt_domain']->value;?>
">
<?php } else { ?>
<tr>
<td width="30%" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label_nt_domain'];?>
</td>
<td width="40%"><input type="text" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['nt_domain']->value;?>
" size="20"></td>
<td width="30%">&nbsp;</td>
</tr>
<?php }
}?>

<tr>
<td colspan="3" align="center"><input type="submit" name="submit" value=" <?php echo $_smarty_tpl->tpl_vars['lang']->value['button_login'];?>
 "></td>
</tr>

</table>

</form>
</div><br>
<p>&nbsp;</p>

<div align="center">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['language']->value) {
?>
   <a href="login.php?lang=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">[ <?php echo $_smarty_tpl->tpl_vars['language']->value;?>
 ]</a><br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
   $("#login").focus();
 });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:login_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
