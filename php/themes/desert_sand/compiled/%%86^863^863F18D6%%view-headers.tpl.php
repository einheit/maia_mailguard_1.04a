<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:52:19
         compiled from view-headers.tpl */ ?>
<fieldset id="view_headers">
<legend><a href="#"  onclick="javascript:$('.message_headers').slideToggle('slow'); return false;"><?php echo $this->_tpl_vars['lang']['link_toggle_header']; ?>
</a></legend>
<div id="view_simple_headers" class="message_headers">
<table width="100%" cellspacing="0" cellpadding="2" border="0">
<tbody>
  <?php $_from = $this->_tpl_vars['headers']['from']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['from']):
?>
  <tr>
    <td class="mailheader">From:</font></td>
    <td><span><?php echo $this->_tpl_vars['from']; ?>
</span><br><a class="wblist_link" href="#" onclick="javascript:wblistAction($(this).siblings('span').text(),'addblock'); return false;"><?php echo $this->_tpl_vars['lang']['link_blacklist']; ?>
</a> | <a class="wblist_link" href="#" onclick="javascript:wblistAction($(this).siblings('span').text(),'addallow'); return false;"><?php echo $this->_tpl_vars['lang']['link_whitelist']; ?>
</a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php $_from = $this->_tpl_vars['headers']['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['to']):
?>
  <tr>
    <td class="mailheader">To:</font></td>
    <td><?php echo $this->_tpl_vars['to']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php $_from = $this->_tpl_vars['headers']['subject']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subject']):
?>
  <tr>
    <td class="mailheader">Subject:</font></td>
    <td><?php echo $this->_tpl_vars['subject']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</tbody></table>
</div>
<div id="view_full_headers"  class="message_headers">
  <table width="100%" cellspacing="0" cellpadding="2" border="0">
  <tbody>
<?php $_from = $this->_tpl_vars['headers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['row']):
?>
<?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rowitem']):
?>
    <tr>
      <td class="mailheader"><?php echo $this->_tpl_vars['key']; ?>
:</font></td>
      <td><?php echo $this->_tpl_vars['rowitem']; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
  </tbody>
  </table>
</div>
</fieldset>