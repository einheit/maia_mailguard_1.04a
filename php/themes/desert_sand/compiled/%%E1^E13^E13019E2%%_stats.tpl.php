<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:06
         compiled from welcome/_stats.tpl */ ?>
    <div id="welcomestats">
        <table>
        <tr>
            <td class="spambody"><b><?php echo $this->_tpl_vars['spam_for_user']; ?>
</b> <?php echo $this->_tpl_vars['lang']['text_welcome_spam_blocked']; ?>
</td>
            <td class="virusbody"><b><?php echo $this->_tpl_vars['virus_for_user']; ?>
</b> <?php echo $this->_tpl_vars['lang']['text_welcome_virus_blocked']; ?>
</td>
        </tr>
        <tr>
            <td class="spambody"><b><?php echo $this->_tpl_vars['spam_for_system']; ?>
</b> <?php echo $this->_tpl_vars['lang']['text_welcome_spam_blocked_system']; ?>
</td>
            <td class="virusbody"><b><?php echo $this->_tpl_vars['virus_for_system']; ?>
</b> <?php echo $this->_tpl_vars['lang']['text_welcome_virus_blocked_system']; ?>
</td>
        </tr>
        </table>
    </div>