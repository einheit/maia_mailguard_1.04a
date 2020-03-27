<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:31
  from '/var/www/html/maia/themes/desert_sand/templates/welcome/_protection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1c9f0696c4_43908506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4b463799da5438c74176a1f70285a5ae79029db' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/welcome/_protection.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d1c9f0696c4_43908506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/maia/themes/desert_sand/code/function.form.php','function'=>'smarty_function_form',),));
?>
    <div id="protectioncontrol" class="styledform ui-widget-content ui-corner-all">
        <?php echo smarty_function_form(array('name'=>"protectionlevel",'action'=>"welcome.php".((string)$_smarty_tpl->tpl_vars['sid']->value)),$_smarty_tpl);?>

         <fieldset>
        <legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_current_level'];?>
<span><?php echo $_smarty_tpl->tpl_vars['lang']->value['radio_protection'][$_smarty_tpl->tpl_vars['protection']->value];?>
</span></legend>
        <ol>
            <li class="protection_row">
            <select name="protection_level" id="protection_select">
              <option value="off" <?php if ($_smarty_tpl->tpl_vars['protection']->value == "off") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['radio_protection']['off'];?>
</option>
              <option value="low" <?php if ($_smarty_tpl->tpl_vars['protection']->value == "low") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['radio_protection']['low'];?>
</option>
              <option value="medium" <?php if ($_smarty_tpl->tpl_vars['protection']->value == "medium") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['radio_protection']['medium'];?>
</option>
              <option value="high" <?php if ($_smarty_tpl->tpl_vars['protection']->value == "high") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['radio_protection']['high'];?>
</option>
            </select>
            </li>
        <?php if ($_smarty_tpl->tpl_vars['protection']->value == "custom") {?>
        <li class="submitrow">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_custom_level'];?>

        </li>
        <?php }?>   
        <li class="protection_row"><input type="submit" name="change_protection" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['button_change_protection'];?>
"></li>
        </ol>
        </fieldset>
        </form>
        <?php echo '<script'; ?>
 type="text/javascript">
        
          $(function(){
            $('#protection_select').selectToUISlider().hide(); 
            $('#protectioncontrol legend span').hide();
          });
          <?php echo '</script'; ?>
>
        
    </div><?php }
}
