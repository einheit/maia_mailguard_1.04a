<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:09
         compiled from adminindex.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $this->_tpl_vars['lang']['header_admin_menu']; ?>
</legend>
<ol>

<li>
<a href="adminusers.php<?php echo $this->_tpl_vars['sid']; ?>
"> <?php echo $this->_tpl_vars['lang']['menu_users']; ?>
 </a>
</li>

<li>
<a href="admindomains.php<?php echo $this->_tpl_vars['sid']; ?>
"> <?php echo $this->_tpl_vars['lang']['menu_domains']; ?>
 </a>
</li>

<?php if ($this->_tpl_vars['super']): ?>
<li>
<a href="adminviruses.php<?php echo $this->_tpl_vars['sid']; ?>
"> <?php echo $this->_tpl_vars['lang']['menu_viruses']; ?>
 </a>
</li>

<li>
<a href="adminlanguages.php<?php echo $this->_tpl_vars['sid']; ?>
"> <?php echo $this->_tpl_vars['lang']['menu_languages']; ?>
 </a>
</li>

<li>
<a href="adminthemes.php<?php echo $this->_tpl_vars['sid']; ?>
"> <?php echo $this->_tpl_vars['lang']['menu_themes']; ?>
 </a>
</li>

<li>
<a href="adminsystem.php<?php echo $this->_tpl_vars['sid']; ?>
"> <?php echo $this->_tpl_vars['lang']['menu_system']; ?>
 </a>
</li>

<?php if ($this->_tpl_vars['enable_stats_tracking']): ?>
<li>
<a href="adminstats.php<?php echo $this->_tpl_vars['sid']; ?>
"> <?php echo $this->_tpl_vars['lang']['menu_statistics']; ?>
 </a>
</li>
<?php endif; ?>

<?php endif; ?>

<li>
<a href="adminhelp.php<?php echo $this->_tpl_vars['sid']; ?>
" target="new"> <?php echo $this->_tpl_vars['lang']['menu_help']; ?>
 </a>
</li>
</ol>
</fieldset>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>