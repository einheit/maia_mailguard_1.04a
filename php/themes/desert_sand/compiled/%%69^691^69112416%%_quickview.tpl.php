<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:06
         compiled from welcome/_quickview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'form', 'welcome/_quickview.tpl', 3, false),)), $this); ?>
   <div id="quickview" class="ui-widget">
     <div class="ui-widget-header ui-corner-top"><h1><?php echo $this->_tpl_vars['lang']['header_cache_contents']; ?>
</h1></div>
        <?php echo smarty_function_form(array('action' => "welcome.php".($this->_tpl_vars['sid']),'name' => 'cache'), $this);?>

        <input type="hidden" name="maxitemid" value="<?php echo $this->_tpl_vars['maxitemid']; ?>
">
        <table>
        <tr>
            <td class="hambody" align="center">
            <a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=ham"><?php if ($this->_tpl_vars['use_icons']): ?><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/ham.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['action_ham_cache']; ?>
"><br><?php endif; ?>[<?php echo $this->_tpl_vars['lang']['action_ham_cache']; ?>
]</a>
            </td>
            <td class="hambody" >
            <?php echo $this->_tpl_vars['hamtext']; ?>

            </td>
        </tr>
        <tr>
            <td class="suspected_spambody" align="center">
            <a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=spam"><?php if ($this->_tpl_vars['use_icons']): ?><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/spam.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['action_spam_cache']; ?>
"><br><?php endif; ?>[<?php echo $this->_tpl_vars['lang']['action_spam_cache']; ?>
]</a>
            </td>
            <td class="suspected_spambody" >
            <?php echo $this->_tpl_vars['spamtext']; ?>

            </td>
        </tr>
        <tr>
            <td class="virusbody" align="center">
            <a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=virus"><?php if ($this->_tpl_vars['use_icons']): ?><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/virus.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['action_virus_cache']; ?>
"><br><?php endif; ?>[<?php echo $this->_tpl_vars['lang']['action_virus_cache']; ?>
]</a>
            </td>
            <td class="virusbody" >
            <?php echo $this->_tpl_vars['virustext']; ?>

            </td>
        </tr>
        <tr>
            <td class="banned_filebody" align="center">
            <a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=attachment"><?php if ($this->_tpl_vars['use_icons']): ?><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/banned-file.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['action_banned_cache']; ?>
"><br><?php endif; ?>[<?php echo $this->_tpl_vars['lang']['action_banned_cache']; ?>
]</a>
            </td>
            <td class="banned_filebody" >
            <?php echo $this->_tpl_vars['bannedtext']; ?>

            </td>
        </tr>
        <tr>
            <td class="bad_headerbody" align="center">
            <a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=header"><?php if ($this->_tpl_vars['use_icons']): ?><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/bad-header.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['action_header_cache']; ?>
"><br><?php endif; ?>[<?php echo $this->_tpl_vars['lang']['action_header_cache']; ?>
]</a>
            </td>
            <td class="bad_headerbody" >
            <?php echo $this->_tpl_vars['headertext']; ?>

            </td>
        </tr>
        </table>
        <div class="ui-widget-header ui-corner-bottom submitrow">
            <input type="submit" name="delete_all_items" value="<?php echo $this->_tpl_vars['lang']['button_delete_all_items']; ?>
">
        </div>
        </form>
    </div>