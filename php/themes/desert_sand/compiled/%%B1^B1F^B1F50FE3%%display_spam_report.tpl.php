<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:52:19
         compiled from display_spam_report.tpl */ ?>
<div align="center">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td class="spamreportheader" align="center"><?php echo $this->_tpl_vars['lang']['header_spam_score']; ?>
</td>
<td class="spamreportheader" align="center"><?php echo $this->_tpl_vars['lang']['header_rule_triggered']; ?>
</td>
<td class="spamreportheader" align="center"><?php echo $this->_tpl_vars['lang']['header_explanation']; ?>
</td>
</tr>
<?php unset($this->_sections['rloop']);
$this->_sections['rloop']['name'] = 'rloop';
$this->_sections['rloop']['loop'] = is_array($_loop=$this->_tpl_vars['spamreport_rows']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rloop']['show'] = true;
$this->_sections['rloop']['max'] = $this->_sections['rloop']['loop'];
$this->_sections['rloop']['step'] = 1;
$this->_sections['rloop']['start'] = $this->_sections['rloop']['step'] > 0 ? 0 : $this->_sections['rloop']['loop']-1;
if ($this->_sections['rloop']['show']) {
    $this->_sections['rloop']['total'] = $this->_sections['rloop']['loop'];
    if ($this->_sections['rloop']['total'] == 0)
        $this->_sections['rloop']['show'] = false;
} else
    $this->_sections['rloop']['total'] = 0;
if ($this->_sections['rloop']['show']):

            for ($this->_sections['rloop']['index'] = $this->_sections['rloop']['start'], $this->_sections['rloop']['iteration'] = 1;
                 $this->_sections['rloop']['iteration'] <= $this->_sections['rloop']['total'];
                 $this->_sections['rloop']['index'] += $this->_sections['rloop']['step'], $this->_sections['rloop']['iteration']++):
$this->_sections['rloop']['rownum'] = $this->_sections['rloop']['iteration'];
$this->_sections['rloop']['index_prev'] = $this->_sections['rloop']['index'] - $this->_sections['rloop']['step'];
$this->_sections['rloop']['index_next'] = $this->_sections['rloop']['index'] + $this->_sections['rloop']['step'];
$this->_sections['rloop']['first']      = ($this->_sections['rloop']['iteration'] == 1);
$this->_sections['rloop']['last']       = ($this->_sections['rloop']['iteration'] == $this->_sections['rloop']['total']);
?>
<tr>
<td class="spamreport" align="center"><?php echo $this->_tpl_vars['spamreport_rows'][$this->_sections['rloop']['index']]['rule_score']; ?>
</td>
<td class="spamreport" align="left"><?php echo $this->_tpl_vars['spamreport_rows'][$this->_sections['rloop']['index']]['rule_name']; ?>
</td>
<?php if (strlen ( $this->_tpl_vars['spamreport_rows'][$this->_sections['rloop']['index']]['description'] ) > 0): ?>
<td class="spamreport" align="left"><?php echo $this->_tpl_vars['spamreport_rows'][$this->_sections['rloop']['index']]['description']; ?>
</td>
<?php else: ?>
<td class="spamreport" align="left"><?php echo $this->_tpl_vars['lang']['text_no_description']; ?>
</td>
<?php endif; ?>
</tr>
<?php endfor; endif; ?>
</table>
</div>