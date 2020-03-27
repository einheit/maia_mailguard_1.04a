<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:48
  from '/var/www/html/maia/themes/desert_sand/templates/adminusers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1cb06674c5_03779064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '621ca1b62b6b8a197cda791eb9f9ca8f1b0c2e48' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/adminusers.tpl',
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
function content_5e7d1cb06674c5_03779064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/maia/themes/desert_sand/code/function.form.php','function'=>'smarty_function_form',),));
$_smarty_tpl->_subTemplateRender("file:html_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo smarty_function_form(array('action'=>"xadminusers.php".((string)$_smarty_tpl->tpl_vars['sid']->value),'name'=>"findadminusers"),$_smarty_tpl);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_users_menu'];?>
 <a href="adminhelp.php#find_users<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
<ol>
  <li>
    <label for="lookup_input"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_lookup_user'];?>
</label>
    <input type="text" id="lookup_input" name="lookup" value="*" size="40">
    <p>(* = <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_wildcard'];?>
)</p>
  </li>
  <li class="submitrow">
    <input type="submit" name="button_find" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['button_lookup'];?>
">
  </li>
</ol>
</fieldset>
</div>
</form>

<?php echo smarty_function_form(array('action'=>"xadminusers.php".((string)$_smarty_tpl->tpl_vars['sid']->value),'name'=>"add_email"),$_smarty_tpl);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_add_email'];?>
 <a href="adminhelp.php#add_email_address<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
<ol>
  <li>
    <label for="new_email_input"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_new_email'];?>
:</label>
    <input id="new_email_input" type="text" name="new_email" value="" size="40">
  </li>
  <li class="submitrow">
    <input type="submit" name="button_add" value=" <?php echo $_smarty_tpl->tpl_vars['lang']->value['button_add_email'];?>
 ">
  </li>
</ol>
</fieldset>
</div>
</form>

<?php echo smarty_function_form(array('action'=>"xadminusers.php".((string)$_smarty_tpl->tpl_vars['sid']->value),'name'=>"link_user"),$_smarty_tpl);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_link_email'];?>
 <a href="adminhelp.php#link_email_address<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
  <ol>
<?php if ($_smarty_tpl->tpl_vars['addresses']->value && $_smarty_tpl->tpl_vars['users']->value) {?>
    <li>
      <label for="email_input"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_email'];?>
:</label>
      <select id="email_input" name="email[]" size="5" multiple>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value, 'id', false, 'email');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email']->value => $_smarty_tpl->tpl_vars['id']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </li>
    <li>
      <label for="user_input"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_user'];?>
:</label>
      <select id="user_input" name="user" size="5">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'id', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['id']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </li>
    <li class="submitrow">
      <input type="submit" name="button_link" value=" <?php echo $_smarty_tpl->tpl_vars['lang']->value['button_link_email'];?>
 ">
    </li>
<?php } elseif ($_smarty_tpl->tpl_vars['addresses']->value) {?>
    <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_no_users'];?>
</li>
<?php } else { ?>
    <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_no_addresses'];?>
</li>
<?php }?>
</ol>
</fieldset>
</div>
</form>

<?php echo smarty_function_form(array('action'=>"xadminusers.php".((string)$_smarty_tpl->tpl_vars['sid']->value),'name'=>"delete_email"),$_smarty_tpl);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_delete_email'];?>
 <a href="adminhelp.php#delete_email_address<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
<ol>
<?php if ($_smarty_tpl->tpl_vars['delete_addresses']->value) {?>
    <li>
      <label for="delete_email_input"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_delete_email'];?>
:</label>
      <select id="delete_email_input" name="delete_email[]" size="5" multiple>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delete_address']->value, 'id', false, 'email');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email']->value => $_smarty_tpl->tpl_vars['id']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </li>
    <li class="submitrow">
    <input type="submit" name="button_delete_email" value=" <?php echo $_smarty_tpl->tpl_vars['lang']->value['button_delete_email'];?>
 ">
    </li>
<?php } else { ?>
    <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_no_addresses'];?>
</li>
<?php }?>
</ol>
</fieldset>
</div>
</form>

<?php echo smarty_function_form(array('action'=>"xadminusers.php".((string)$_smarty_tpl->tpl_vars['sid']->value),'name'=>"delete_user"),$_smarty_tpl);?>

<div class="styledform ui-widget-content">
<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_delete_user'];?>
 <a href="adminhelp.php#delete_user<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></legend>
<ol>

<?php if ($_smarty_tpl->tpl_vars['del_users']->value) {?>
    <li>
      <label for="delete_user_input"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_user'];?>
:</label>
      <select id="delete_user_input" name="del_user[]" size="5" multiple>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['del_user']->value, 'id', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['id']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </li>
    <li class="submitrow">
      <input type="submit" name="button_delete_user" value=" <?php echo $_smarty_tpl->tpl_vars['lang']->value['button_delete_user'];?>
 ">
    </li>
<?php } else { ?>
    <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_no_users'];?>
</li>
<?php }?>
</ol>
</fieldset>
</div>
</form>

<div class="styledform">
<a href="admindex.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['link_admin_menu'];?>
]</a>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:html_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
