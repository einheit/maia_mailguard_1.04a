<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:02
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "login_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" id="loginform" name="login" action="xlogin.php">
<input type="hidden" name="super" value="<?php echo $this->_tpl_vars['super']; ?>
">
<input type="hidden" name="offset" value="0">

<script type="text/javascript">
<!--
  var server_timestamp = <?php echo $this->_tpl_vars['server_timestamp']; ?>
;
  var client_timestamp = new Date();
  var offset = server_timestamp - Math.floor((client_timestamp.getTime() + client_timestamp.getTimezoneOffset() * 60 * 1000) / 1000);
  document.login.offset.value = offset;
// -->
</script>

<?php if (! $this->_tpl_vars['display_language_is_default']): ?>
<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['display_language']; ?>
">
<?php endif; ?>
<input type="hidden" name="charset" value="<?php echo $this->_tpl_vars['html_charset']; ?>
">

<table border="0" cellspacing="2" cellpadding="2">

<tr>
<td colspan="3" style="font-size: 110%; background: #dddddd;"><strong><?php echo $this->_tpl_vars['lang']['banner_subtitle']; ?>
</strong></td>
</tr>

<?php if (( $this->_tpl_vars['auth_method'] == 'pop3' && $this->_tpl_vars['routing_domain'] ) || $this->_tpl_vars['auth_method'] == 'ldap' || $this->_tpl_vars['auth_method'] == 'exchange' || $this->_tpl_vars['auth_method'] == 'sql' || $this->_tpl_vars['auth_method'] == 'internal' || $this->_tpl_vars['auth_method'] == 'external'): ?> 
<tr>
<td width="30%" align="right"><?php echo $this->_tpl_vars['lang']['label_username']; ?>
</td>
<td width="40%"><input type="text" id="login" name="username" value="" size="20"></td>
<td width="30%">&nbsp;</td>
</tr>
<?php else: ?>
<tr>
<td width="30%" align="right"><?php echo $this->_tpl_vars['lang']['label_email']; ?>
</td>
<td width="40%"><input type="text" id="login" name="address" value="" size="20"></td>
<td width="30%">&nbsp;</td>
</tr>
<?php endif; ?>

<tr>
<td width="30%" align="right"><?php echo $this->_tpl_vars['lang']['label_password']; ?>
</td>
<td width="40%"><input type="password" name="pwd" value="" size="20"></td>
<td width="30%">&nbsp;</td>
</tr>

<?php if ($this->_tpl_vars['auth_method'] == 'exchange'): ?>
<?php if ($this->_tpl_vars['nt_domain']): ?>
<input type="hidden" name="domain" value="<?php echo $this->_tpl_vars['nt_domain']; ?>
">
<?php else: ?>
<tr>
<td width="30%" align="right"><?php echo $this->_tpl_vars['lang']['label_nt_domain']; ?>
</td>
<td width="40%"><input type="text" name="domain" value="<?php echo $this->_tpl_vars['nt_domain']; ?>
" size="20"></td>
<td width="30%">&nbsp;</td>
</tr>
<?php endif; ?>
<?php endif; ?>

<tr>
<td colspan="3" align="center"><input type="submit" name="submit" value=" <?php echo $this->_tpl_vars['lang']['button_login']; ?>
 "></td>
</tr>

</table>

</form>
</div><br>
<p>&nbsp;</p>

<div align="center">
<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['language']):
?>
   <a href="login.php?lang=<?php echo $this->_tpl_vars['key']; ?>
">[ <?php echo $this->_tpl_vars['language']; ?>
 ]</a><br>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php echo '
<script type="text/javascript">
$(document).ready(function(){
   $("#login").focus();
 });
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "login_foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>