<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:49
  from '/var/www/html/maia/themes/desert_sand/templates/settings/_userlist-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1cb1e2d967_97949637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3d93e7062f4eecf288e9ec9964f486d2d94f4ee' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/settings/_userlist-table.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d1cb1e2d967_97949637 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user']->value) {?>
<div class="styledform ui-widget-content" id="userlist-table">
<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</legend>
<ol>
<li>
<table class="ui-list-table">
      <tr>
        <?php if ($_smarty_tpl->tpl_vars['show_delete']->value) {?>
        <td class="menuheader2" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_delete'];?>
</td>
        <?php }?>
        <td class="menuheader2" align="center">
          <?php echo $_smarty_tpl->tpl_vars['user_header']->value;?>

        </td>
        <td class="suspected_hambody3" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ham_header'];?>
</td>
        <td class="suspected_spambody3" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['spam_header'];?>
</td>
        <td class="virusbody3" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['virus_header'];?>
</td>
        <td class="banned_filebody3" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['banned_header'];?>
</td>
        <td class="bad_headerbody3" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['badheader_header'];?>
</td>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'row', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
      <tr>
        <?php if ($_smarty_tpl->tpl_vars['show_delete']->value) {?>
        <td class="menubody2" align="center"><?php if ($_smarty_tpl->tpl_vars['key']->value == "@.") {?>
              <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_required'];?>

          <?php } else { ?>
              <input type="checkbox" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['domain_id'];?>
">
          <?php }?></td>
        <?php }?>
        <td class="menubody2" align="center"><a href="ximpersonate.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
id=<?php echo $_smarty_tpl->tpl_vars['row']->value['maia_user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></td>
        <td class="suspected_hambody2" align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['ham'];?>
</td>
        <td class="suspected_spambody2" align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['spam'];?>
</td>
        <td class="virusbody2" align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['virus'];?>
</td>
        <td class="banned_filebody2" align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['file'];?>
</td>
        <td class="bad_headerbody2" align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['header'];?>
</td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</li>
      <?php if ($_smarty_tpl->tpl_vars['show_delete']->value) {?>
          <li>
            <label for="deleteaddresses" class="extendedquestion"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_delete_all_addresses'];?>
</label>
            <input type="checkbox" name="deleteaddresses">
          </li>
          <li class="submitrow">
          <input type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['button_delete'];?>
">
          </li>
      <?php }?>
</ol>
</fieldset>
</div>
<?php }
}
}
