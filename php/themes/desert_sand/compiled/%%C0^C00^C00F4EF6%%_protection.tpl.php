<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:06
         compiled from welcome/_protection.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'form', 'welcome/_protection.tpl', 2, false),)), $this); ?>
    <div id="protectioncontrol" class="styledform ui-widget-content ui-corner-all">
        <?php echo smarty_function_form(array('name' => 'protectionlevel','action' => "welcome.php".($this->_tpl_vars['sid'])), $this);?>

         <fieldset>
        <legend><?php echo $this->_tpl_vars['lang']['text_welcome_current_level']; ?>
<span><?php echo $this->_tpl_vars['lang']['radio_protection'][$this->_tpl_vars['protection']]; ?>
</span></legend>
        <ol>
            <li class="protection_row">
            <select name="protection_level" id="protection_select">
              <option value="off" <?php if ($this->_tpl_vars['protection'] == 'off'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lang']['radio_protection']['off']; ?>
</option>
              <option value="low" <?php if ($this->_tpl_vars['protection'] == 'low'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lang']['radio_protection']['low']; ?>
</option>
              <option value="medium" <?php if ($this->_tpl_vars['protection'] == 'medium'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lang']['radio_protection']['medium']; ?>
</option>
              <option value="high" <?php if ($this->_tpl_vars['protection'] == 'high'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lang']['radio_protection']['high']; ?>
</option>
            </select>
            </li>
        <?php if ($this->_tpl_vars['protection'] == 'custom'): ?>
        <li class="submitrow">
            <?php echo $this->_tpl_vars['lang']['text_welcome_custom_level']; ?>

        </li>
        <?php endif; ?>   
        <li class="protection_row"><input type="submit" name="change_protection" value="<?php echo $this->_tpl_vars['lang']['button_change_protection']; ?>
"></li>
        </ol>
        </fieldset>
        </form>
        <script type="text/javascript">
        <?php echo '
          $(function(){
            $(\'#protection_select\').selectToUISlider().hide(); 
            $(\'#protectioncontrol legend span\').hide();
          });
          </script>
        '; ?>

    </div>