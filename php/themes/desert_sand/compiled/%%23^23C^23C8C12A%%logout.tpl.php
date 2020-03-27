<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:52:01
         compiled from logout.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "login_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div align="center">
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td valign="top" class="messagebox" align="center">
<?php echo $this->_tpl_vars['lang']['text_logged_out']; ?>
<br>
<br>
<a href="login.php?prevlang=<?php echo $this->_tpl_vars['display_language']; ?>
">[ <?php echo $this->_tpl_vars['lang']['link_login']; ?>
]</a>
</td>
</tr>
</table>
</div><br>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "login_foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>