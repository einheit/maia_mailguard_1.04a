<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:12
         compiled from xadminusers.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['button'] == 'add'): ?>

        <div align="center">
        <table border="0" cellspacing="2" cellpadding="2">
        <tr><td align="center" class="messagebox">
        <?php if ($this->_tpl_vars['new_email']): ?>

            <?php if (( $this->_tpl_vars['super'] || ! $this->_tpl_vars['bad_domain'] ) && ! $this->_tpl_vars['bad_user'] && $this->_tpl_vars['succeeded']): ?>
                <?php echo $this->_tpl_vars['lang']['text_address_added']; ?>

            <?php else: ?>
                <?php echo $this->_tpl_vars['lang']['text_address_not_added']; ?>

            <?php endif; ?>

        <?php else: ?>
            <?php echo $this->_tpl_vars['lang']['text_address_not_added']; ?>

        <?php endif; ?>
        </td></tr>
        </table></div>
        <p>&nbsp;</p>
        <div align="center">
        <a href="adminusers.php<?php echo $this->_tpl_vars['sid']; ?>
"><?php echo $this->_tpl_vars['lang']['link_users_menu']; ?>
</a>
        </div>

<?php elseif ($this->_tpl_vars['button'] == 'delete_email'): ?>

        <div align="center">
        <table border="0" cellspacing="2" cellpadding="2">
        <tr><td align="center" class="messagebox">
        <?php if ($this->_tpl_vars['delete_email']): ?>
            <?php if ($this->_tpl_vars['delete_failed']): ?>
              <?php echo $this->_tpl_vars['lang']['text_address_not_deleted']; ?>

            <?php else: ?>
              <?php echo $this->_tpl_vars['lang']['text_address_deleted']; ?>

            <?php endif; ?>
        <?php else: ?>
            <?php echo $this->_tpl_vars['lang']['text_address_not_deleted']; ?>

        <?php endif; ?>
        </td></tr>
        </table></div>
        <p>&nbsp;</p>
        <div align="center">
        <a href="adminusers.php<?php echo $this->_tpl_vars['sid']; ?>
"><?php echo $this->_tpl_vars['lang']['link_users_menu']; ?>
</a>
        </div>

<?php elseif ($this->_tpl_vars['button'] == 'delete_user'): ?>

        <div align="center">
        <table border="0" cellspacing="2" cellpadding="2">
        <tr><td align="center" class="messagebox">
        <?php if ($this->_tpl_vars['del_user']): ?>
            <?php echo $this->_tpl_vars['lang']['text_user_deleted']; ?>

        <?php else: ?>
            <?php echo $this->_tpl_vars['lang']['text_user_not_deleted']; ?>

        <?php endif; ?>
        </td></tr>
        </table></div>
        <p>&nbsp;</p>
        <div align="center">
        <a href="adminusers.php<?php echo $this->_tpl_vars['sid']; ?>
"><?php echo $this->_tpl_vars['lang']['link_users_menu']; ?>
</a>
        </div>

<?php elseif ($this->_tpl_vars['button'] == 'link'): ?>

        <div align="center">
        <table border="0" cellspacing="2" cellpadding="2">
        <?php if ($this->_tpl_vars['email'] && $this->_tpl_vars['user']): ?>
            <?php $_from = $this->_tpl_vars['lang']['text_address_linked_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['text_address_linked']):
?>
                <tr><td align="center" class="messagebox">
                <?php echo $this->_tpl_vars['text_address_linked']; ?>

                </td></tr>
            <?php endforeach; endif; unset($_from); ?>
            </table></div>
            <p>&nbsp;</p>
        <?php else: ?>
            <tr><td align="center" class="messagebox">
            <?php echo $this->_tpl_vars['lang']['text_address_not_linked']; ?>

            </td></tr>
        <?php endif; ?>
        </table></div>
        <p>&nbsp;</p>
        <div align="center">
        <a href="adminusers.php<?php echo $this->_tpl_vars['sid']; ?>
"><?php echo $this->_tpl_vars['lang']['link_users_menu']; ?>
</a>
        </div>

<?php elseif ($this->_tpl_vars['button'] == 'find'): ?>
        <?php if ($this->_tpl_vars['user']): ?>
        <?php ob_start(); ?><?php echo $this->_tpl_vars['lang']['text_search_results']; ?>

          &nbsp;<font size="3"><a href="adminhelp.php#impersonate<?php echo $this->_tpl_vars['sid']; ?>
" target="new" class="ui-icon ui-icon-help ui-border-all"></a></font><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('title', ob_get_contents());ob_end_clean(); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "settings/_userlist-table.tpl", 'smarty_include_vars' => array('user_header' => $this->_tpl_vars['lang']['text_user_found'],'show_delete' => '0','title' => $this->_tpl_vars['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php else: ?>
            <div class="messagebox">
            <?php echo $this->_tpl_vars['lang']['text_user_not_found']; ?>

            </div>
        <?php endif; ?>
        <div class="styledform">
        <a href="adminusers.php<?php echo $this->_tpl_vars['sid']; ?>
"><?php echo $this->_tpl_vars['lang']['link_users_menu']; ?>
</a>
        </div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>