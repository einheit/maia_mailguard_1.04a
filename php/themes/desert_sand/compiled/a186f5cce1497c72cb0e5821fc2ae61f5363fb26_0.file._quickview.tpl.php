<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:31
  from '/var/www/html/maia/themes/desert_sand/templates/welcome/_quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1c9f075a17_24007229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a186f5cce1497c72cb0e5821fc2ae61f5363fb26' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/welcome/_quickview.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d1c9f075a17_24007229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/maia/themes/desert_sand/code/function.form.php','function'=>'smarty_function_form',),));
?>
   <div id="quickview" class="ui-widget">
     <div class="ui-widget-header ui-corner-top"><h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_cache_contents'];?>
</h1></div>
        <?php echo smarty_function_form(array('action'=>"welcome.php".((string)$_smarty_tpl->tpl_vars['sid']->value),'name'=>"cache"),$_smarty_tpl);?>

        <input type="hidden" name="maxitemid" value="<?php echo $_smarty_tpl->tpl_vars['maxitemid']->value;?>
">
        <table>
        <tr>
            <td class="hambody" align="center">
            <a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=ham"><?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/ham.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_ham_cache'];?>
"><br><?php }?>[<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_ham_cache'];?>
]</a>
            </td>
            <td class="hambody" >
            <?php echo $_smarty_tpl->tpl_vars['hamtext']->value;?>

            </td>
        </tr>
        <tr>
            <td class="suspected_spambody" align="center">
            <a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=spam"><?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/spam.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_spam_cache'];?>
"><br><?php }?>[<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_spam_cache'];?>
]</a>
            </td>
            <td class="suspected_spambody" >
            <?php echo $_smarty_tpl->tpl_vars['spamtext']->value;?>

            </td>
        </tr>
        <tr>
            <td class="virusbody" align="center">
            <a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=virus"><?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/virus.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_virus_cache'];?>
"><br><?php }?>[<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_virus_cache'];?>
]</a>
            </td>
            <td class="virusbody" >
            <?php echo $_smarty_tpl->tpl_vars['virustext']->value;?>

            </td>
        </tr>
        <tr>
            <td class="banned_filebody" align="center">
            <a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=attachment"><?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/banned-file.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_banned_cache'];?>
"><br><?php }?>[<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_banned_cache'];?>
]</a>
            </td>
            <td class="banned_filebody" >
            <?php echo $_smarty_tpl->tpl_vars['bannedtext']->value;?>

            </td>
        </tr>
        <tr>
            <td class="bad_headerbody" align="center">
            <a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=header"><?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/bad-header.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_header_cache'];?>
"><br><?php }?>[<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_header_cache'];?>
]</a>
            </td>
            <td class="bad_headerbody" >
            <?php echo $_smarty_tpl->tpl_vars['headertext']->value;?>

            </td>
        </tr>
        </table>
        <div class="ui-widget-header ui-corner-bottom submitrow">
            <input type="submit" name="delete_all_items" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['button_delete_all_items'];?>
">
        </div>
        </form>
    </div><?php }
}
