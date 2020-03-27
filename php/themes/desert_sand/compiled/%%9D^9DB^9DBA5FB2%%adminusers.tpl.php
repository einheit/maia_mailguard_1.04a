<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:10
         compiled from adminusers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'form', 'adminusers.tpl', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo smarty_function_form(array('action' => "xadminusers.php".($this->_tpl_vars['sid']),'name' => 'findadminusers'), $this);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $this->_tpl_vars['lang']['header_users_menu']; ?>
 <a href="adminhelp.php#find_users<?php echo $this->_tpl_vars['sid']; ?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
<ol>
  <li>
    <label for="lookup_input"><?php echo $this->_tpl_vars['lang']['text_lookup_user']; ?>
</label>
    <input type="text" id="lookup_input" name="lookup" value="*" size="40">
    <p>(* = <?php echo $this->_tpl_vars['lang']['text_wildcard']; ?>
)</p>
  </li>
  <li class="submitrow">
    <input type="submit" name="button_find" value="<?php echo $this->_tpl_vars['lang']['button_lookup']; ?>
">
  </li>
</ol>
</fieldset>
</div>
</form>

<?php echo smarty_function_form(array('action' => "xadminusers.php".($this->_tpl_vars['sid']),'name' => 'add_email'), $this);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $this->_tpl_vars['lang']['header_add_email']; ?>
 <a href="adminhelp.php#add_email_address<?php echo $this->_tpl_vars['sid']; ?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
<ol>
  <li>
    <label for="new_email_input"><?php echo $this->_tpl_vars['lang']['text_new_email']; ?>
:</label>
    <input id="new_email_input" type="text" name="new_email" value="" size="40">
  </li>
  <li class="submitrow">
    <input type="submit" name="button_add" value=" <?php echo $this->_tpl_vars['lang']['button_add_email']; ?>
 ">
  </li>
</ol>
</fieldset>
</div>
</form>

<?php echo smarty_function_form(array('action' => "xadminusers.php".($this->_tpl_vars['sid']),'name' => 'link_user'), $this);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $this->_tpl_vars['lang']['header_link_email']; ?>
 <a href="adminhelp.php#link_email_address<?php echo $this->_tpl_vars['sid']; ?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
  <ol>
<?php if ($this->_tpl_vars['addresses'] && $this->_tpl_vars['users']): ?>
    <li>
      <label for="email_input"><?php echo $this->_tpl_vars['lang']['text_email']; ?>
:</label>
      <select id="email_input" name="email[]" size="5" multiple>
        <?php $_from = $this->_tpl_vars['address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email'] => $this->_tpl_vars['id']):
?>
        <option value="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['email']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select>
    </li>
    <li>
      <label for="user_input"><?php echo $this->_tpl_vars['lang']['text_user']; ?>
:</label>
      <select id="user_input" name="user" size="5">
        <?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['id']):
?>
        <option value="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select>
    </li>
    <li class="submitrow">
      <input type="submit" name="button_link" value=" <?php echo $this->_tpl_vars['lang']['button_link_email']; ?>
 ">
    </li>
<?php elseif ($this->_tpl_vars['addresses']): ?>
    <li><?php echo $this->_tpl_vars['lang']['text_no_users']; ?>
</li>
<?php else: ?>
    <li><?php echo $this->_tpl_vars['lang']['text_no_addresses']; ?>
</li>
<?php endif; ?>
</ol>
</fieldset>
</div>
</form>

<?php echo smarty_function_form(array('action' => "xadminusers.php".($this->_tpl_vars['sid']),'name' => 'delete_email'), $this);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $this->_tpl_vars['lang']['header_delete_email']; ?>
 <a href="adminhelp.php#delete_email_address<?php echo $this->_tpl_vars['sid']; ?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
<ol>
<?php if ($this->_tpl_vars['delete_addresses']): ?>
    <li>
      <label for="delete_email_input"><?php echo $this->_tpl_vars['lang']['text_delete_email']; ?>
:</label>
      <select id="delete_email_input" name="delete_email[]" size="5" multiple>
        <?php $_from = $this->_tpl_vars['delete_address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email'] => $this->_tpl_vars['id']):
?>
        <option value="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['email']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select>
    </li>
    <li class="submitrow">
    <input type="submit" name="button_delete_email" value=" <?php echo $this->_tpl_vars['lang']['button_delete_email']; ?>
 ">
    </li>
<?php else: ?>
    <li><?php echo $this->_tpl_vars['lang']['text_no_addresses']; ?>
</li>
<?php endif; ?>
</ol>
</fieldset>
</div>
</form>

<?php echo smarty_function_form(array('action' => "xadminusers.php".($this->_tpl_vars['sid']),'name' => 'delete_user'), $this);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $this->_tpl_vars['lang']['header_delete_user']; ?>
 <a href="adminhelp.php#delete_user<?php echo $this->_tpl_vars['sid']; ?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
<ol>

<?php if ($this->_tpl_vars['del_users']): ?>
    <li>
      <label for="delete_user_input"><?php echo $this->_tpl_vars['lang']['text_user']; ?>
:</label>
      <select id="delete_user_input" name="del_user[]" size="5" multiple>
        <?php $_from = $this->_tpl_vars['del_user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['id']):
?>
        <option value="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select>
    </li>
    <li class="submitrow">
      <input type="submit" name="button_delete_user" value=" <?php echo $this->_tpl_vars['lang']['button_delete_user']; ?>
 ">
    </li>
<?php else: ?>
    <li><?php echo $this->_tpl_vars['lang']['text_no_users']; ?>
</li>
<?php endif; ?>
</ol>
</fieldset>
</div>
</form>

<div class="styledform">
<a href="admindex.php<?php echo $this->_tpl_vars['sid']; ?>
">[<?php echo $this->_tpl_vars['lang']['link_admin_menu']; ?>
]</a>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>