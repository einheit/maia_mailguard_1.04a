<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:52:19
         compiled from view-smtp.tpl */ ?>
<fieldset id="view_headers">
<legend><a href="#"  onclick="javascript:$('#view_smtp_sender').slideToggle('slow'); return false;"><?php echo $this->_tpl_vars['lang']['link_toggle_smtp_sender']; ?>
</a></legend>
<div id="view_smtp_sender" class="message_headers">
<table width="100%" cellspacing="0" cellpadding="2" border="0">
<tbody>
  <tr>
    <td class="mailheader"><?php echo $this->_tpl_vars['lang']['text_smtp_sender']; ?>
:</font></td>
    <td><span><?php echo $this->_tpl_vars['sender_email']; ?>
</span><br><a class="wblist_link" href="#" onclick="javascript:wblistAction($(this).siblings('span').text(),'addblock'); return false;"><?php echo $this->_tpl_vars['lang']['link_blacklist']; ?>
</a> | <a class="wblist_link" href="#" onclick="javascript:wblistAction($(this).siblings('span').text(),'addallow'); return false;"><?php echo $this->_tpl_vars['lang']['link_whitelist']; ?>
</a></td>
  </tr>
</table>
</div>
</fieldset>