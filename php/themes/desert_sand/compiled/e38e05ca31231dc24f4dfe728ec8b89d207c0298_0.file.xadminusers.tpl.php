<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:49
  from '/var/www/html/maia/themes/desert_sand/templates/xadminusers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1cb1e1c404_26417105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e38e05ca31231dc24f4dfe728ec8b89d207c0298' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/xadminusers.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html_head.tpl' => 1,
    'file:settings/_userlist-table.tpl' => 1,
    'file:html_foot.tpl' => 1,
  ),
),false)) {
function content_5e7d1cb1e1c404_26417105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['button']->value == "add") {?>

        <div align="center">
        <table border="0" cellspacing="2" cellpadding="2">
        <tr><td align="center" class="messagebox">
        <?php if ($_smarty_tpl->tpl_vars['new_email']->value) {?>

            <?php if (($_smarty_tpl->tpl_vars['super']->value || !$_smarty_tpl->tpl_vars['bad_domain']->value) && !$_smarty_tpl->tpl_vars['bad_user']->value && $_smarty_tpl->tpl_vars['succeeded']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_address_added'];?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_address_not_added'];?>

            <?php }?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_address_not_added'];?>

        <?php }?>
        </td></tr>
        </table></div>
        <p>&nbsp;</p>
        <div align="center">
        <a href="adminusers.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['link_users_menu'];?>
</a>
        </div>

<?php } elseif ($_smarty_tpl->tpl_vars['button']->value == "delete_email") {?>

        <div align="center">
        <table border="0" cellspacing="2" cellpadding="2">
        <tr><td align="center" class="messagebox">
        <?php if ($_smarty_tpl->tpl_vars['delete_email']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['delete_failed']->value) {?>
              <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_address_not_deleted'];?>

            <?php } else { ?>
              <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_address_deleted'];?>

            <?php }?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_address_not_deleted'];?>

        <?php }?>
        </td></tr>
        </table></div>
        <p>&nbsp;</p>
        <div align="center">
        <a href="adminusers.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['link_users_menu'];?>
</a>
        </div>

<?php } elseif ($_smarty_tpl->tpl_vars['button']->value == "delete_user") {?>

        <div align="center">
        <table border="0" cellspacing="2" cellpadding="2">
        <tr><td align="center" class="messagebox">
        <?php if ($_smarty_tpl->tpl_vars['del_user']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_user_deleted'];?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_user_not_deleted'];?>

        <?php }?>
        </td></tr>
        </table></div>
        <p>&nbsp;</p>
        <div align="center">
        <a href="adminusers.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['link_users_menu'];?>
</a>
        </div>

<?php } elseif ($_smarty_tpl->tpl_vars['button']->value == "link") {?>

        <div align="center">
        <table border="0" cellspacing="2" cellpadding="2">
        <?php if ($_smarty_tpl->tpl_vars['email']->value && $_smarty_tpl->tpl_vars['user']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang']->value['text_address_linked_array'], 'text_address_linked');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['text_address_linked']->value) {
?>
                <tr><td align="center" class="messagebox">
                <?php echo $_smarty_tpl->tpl_vars['text_address_linked']->value;?>

                </td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table></div>
            <p>&nbsp;</p>
        <?php } else { ?>
            <tr><td align="center" class="messagebox">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_address_not_linked'];?>

            </td></tr>
        <?php }?>
        </table></div>
        <p>&nbsp;</p>
        <div align="center">
        <a href="adminusers.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['link_users_menu'];?>
</a>
        </div>

<?php } elseif ($_smarty_tpl->tpl_vars['button']->value == "find") {?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "title", null);
echo $_smarty_tpl->tpl_vars['lang']->value['text_search_results'];?>

          &nbsp;<font size="3"><a href="adminhelp.php#impersonate<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></font><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("file:settings/_userlist-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_header'=>$_smarty_tpl->tpl_vars['lang']->value['text_user_found'],'show_delete'=>"0",'title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

        <?php } else { ?>
            <div class="messagebox">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_user_not_found'];?>

            </div>
        <?php }?>
        <div class="styledform">
        <a href="adminusers.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['link_users_menu'];?>
</a>
        </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
