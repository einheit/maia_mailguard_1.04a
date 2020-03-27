<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:52:19
         compiled from viewmail_menu.tpl */ ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['return_route']; ?>
<?php echo $this->_tpl_vars['msid']; ?>
id=<?php echo $this->_tpl_vars['id']; ?>
&cache_type=<?php echo $this->_tpl_vars['cache_type']; ?>
&raw=<?php $this->_smarty_vars['capture']['raw_link'] = ob_get_contents();  $this->assign('raw_link', ob_get_contents());ob_end_clean(); ?>
<div class="buttonwrapper topbanner4">
<a class="squarebutton hambutton" href="#" onclick="itemAction('<?php echo $this->_tpl_vars['return_route']; ?>
<?php echo $this->_tpl_vars['msid']; ?>
id=<?php echo $this->_tpl_vars['id']; ?>
', 'ham'); return false;"><span><?php echo $this->_tpl_vars['actionlang']['0']; ?>
</span></a>
 <a class="squarebutton spambutton" href="#" onclick="itemAction('<?php echo $this->_tpl_vars['return_route']; ?>
<?php echo $this->_tpl_vars['msid']; ?>
id=<?php echo $this->_tpl_vars['id']; ?>
', 'spam'); return false;"><span><?php echo $this->_tpl_vars['actionlang']['1']; ?>
</span></a>
 <a class="squarebutton deletebutton" href="#" onclick="itemAction('<?php echo $this->_tpl_vars['return_route']; ?>
<?php echo $this->_tpl_vars['msid']; ?>
id=<?php echo $this->_tpl_vars['id']; ?>
', 'delete'); return false;"><span><?php echo $this->_tpl_vars['actionlang']['2']; ?>
</span></a> 
 <a class="squarebutton resendbutton" href="#" onclick="itemAction('<?php echo $this->_tpl_vars['return_route']; ?>
<?php echo $this->_tpl_vars['msid']; ?>
id=<?php echo $this->_tpl_vars['id']; ?>
', 'resend'); return false;"><span><?php echo $this->_tpl_vars['lang']['button_resend']; ?>
</span></a> 
<?php if (! $this->_tpl_vars['raw']): ?>
<a class="squarebutton rawbutton<?php if ($this->_tpl_vars['ajax']): ?> thickbox<?php endif; ?>" href="<?php echo $this->_tpl_vars['raw_link']; ?>
y"><span><?php echo $this->_tpl_vars['lang']['link_view_raw']; ?>
</span></a>
<?php else: ?>
<a class="squarebutton decodebutton<?php if ($this->_tpl_vars['ajax']): ?> thickbox<?php endif; ?>" href="<?php echo $this->_tpl_vars['raw_link']; ?>
n"><span><?php echo $this->_tpl_vars['lang']['link_view_decoded']; ?>
</span></a>
<?php endif; ?>
  </div>