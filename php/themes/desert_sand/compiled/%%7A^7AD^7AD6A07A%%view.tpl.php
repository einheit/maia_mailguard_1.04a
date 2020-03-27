<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:52:19
         compiled from view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'form', 'view.tpl', 35, false),)), $this); ?>
<?php if (! $this->_tpl_vars['ajax']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (! $this->_tpl_vars['error']): ?>
<script language="JavaScript"><!--
<?php if ($this->_tpl_vars['ajax']): ?>
<?php echo '
function itemAction(action, rvalue) {
        $.ajax({
          type: "POST",
          '; ?>
url: "view.php<?php echo $this->_tpl_vars['msid']; ?>
mail_id=<?php echo $this->_tpl_vars['id']; ?>
&cache_type=<?php echo $this->_tpl_vars['cache_type']; ?>
"<?php echo ',
          dataType: "script",
          '; ?>
data: "ajax=true&cache_item[m][<?php echo $this->_tpl_vars['id']; ?>
]=" + rvalue<?php echo ' + "&ufid=" + document.viewmail.ufid.value
        });
}
'; ?>

<?php else: ?>
<?php echo '
function itemAction(action, rvalue) {
        document.forms.viewmail["cache_item[m]['; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo ']"].value = rvalue;
        document.viewmail.submit(); 
    }
'; ?>

<?php endif; ?>
<?php echo '
function wblistAction(email,type) {
     $.ajax({
        type: "POST",
        '; ?>
url: "wblist.php<?php echo $this->_tpl_vars['msid']; ?>
action="<?php echo ' + type,
        dataType: "script",
        data: "ajax=true&newaddr=" + email + "&ufid=" + document.viewmail.ufid.value
      });
}
'; ?>

//--></script>
<div><div id="viewmessage"></div>
<?php echo smarty_function_form(array('name' => 'viewmail','action' => "#"), $this);?>

<input type="hidden" name="cache_item[m][<?php echo $this->_tpl_vars['id']; ?>
]" value="">

<div class="topbanner4">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "viewmail_menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<div id="spam_report">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "display_spam_report.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php if ($this->_tpl_vars['headers']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "view-headers.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "view-smtp.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="message_detail">
<?php echo $this->_tpl_vars['message']; ?>

</div>
<div class="topbanner4">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "viewmail_menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</form>
</div>
<script type="text/javascript">
<?php echo '
$(\'.message\').simpletip(\'.DisplayLink\',{});
'; ?>

</script>
<?php else: ?>

<div>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td class="messagebox" align="center">
<?php echo $this->_tpl_vars['error']; ?>

</td>
</tr></table></div>
<?php endif; ?>
<?php if (! $this->_tpl_vars['ajax']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>