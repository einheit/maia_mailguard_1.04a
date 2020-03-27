<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:31
  from '/var/www/html/maia/themes/desert_sand/templates/welcome/_stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1c9f07ac78_74306638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8f4d80480890980ecd5b639f114b5ce711fde7' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/welcome/_stats.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d1c9f07ac78_74306638 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="welcomestats">
        <table>
        <tr>
            <td class="spambody"><b><?php echo $_smarty_tpl->tpl_vars['spam_for_user']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_spam_blocked'];?>
</td>
            <td class="virusbody"><b><?php echo $_smarty_tpl->tpl_vars['virus_for_user']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_virus_blocked'];?>
</td>
        </tr>
        <tr>
            <td class="spambody"><b><?php echo $_smarty_tpl->tpl_vars['spam_for_system']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_spam_blocked_system'];?>
</td>
            <td class="virusbody"><b><?php echo $_smarty_tpl->tpl_vars['virus_for_system']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_virus_blocked_system'];?>
</td>
        </tr>
        </table>
    </div>
<?php }
}
