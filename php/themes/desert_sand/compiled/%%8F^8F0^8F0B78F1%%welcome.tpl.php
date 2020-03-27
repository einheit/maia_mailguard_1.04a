<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:06
         compiled from welcome.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="rightpanel">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "welcome/_protection.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <div id="welcome"><h2><?php echo $this->_tpl_vars['lang']['text_welcome_greeting']; ?>
</h2>
    <?php if ($this->_tpl_vars['firsttime']): ?>
    <?php echo $this->_tpl_vars['lang']['text_welcome_first_time']; ?>

    <?php endif; ?>
    <?php echo $this->_tpl_vars['lang']['text_welcome_intro']; ?>

   </div>
 </div>
<div id="maincontent">
<?php if ($this->_tpl_vars['message']): ?>
<div id="messagebox" align="center">
<?php echo $this->_tpl_vars['message']; ?>

</div>
<?php endif; ?>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "welcome/_quickview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "welcome/_stats.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 
  </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>