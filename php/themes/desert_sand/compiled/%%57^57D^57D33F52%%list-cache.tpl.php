<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:52:13
         compiled from list-cache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'form', 'list-cache.tpl', 9, false),array('function', 'cycle', 'list-cache.tpl', 58, false),array('modifier', 'mb_truncate', 'list-cache.tpl', 73, false),array('modifier', 'escape', 'list-cache.tpl', 73, false),array('modifier', 'truncate', 'list-cache.tpl', 76, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="messagebox" align="center">
<?php if ($this->_tpl_vars['message']): ?>
<?php echo $this->_tpl_vars['message']; ?>

<?php endif; ?>
</div>
<?php if ($this->_tpl_vars['need_to']): ?><?php $this->assign('cacheColumns', '6'); ?><?php else: ?><?php $this->assign('cacheColumns', '5'); ?><?php endif; ?>
<div class="ui-widget" id="cachelistwrapper">
<?php echo smarty_function_form(array('action' => "list-cache.php".($this->_tpl_vars['msid'])."cache_type=".($this->_tpl_vars['cache_type']),'name' => 'cache'), $this);?>


<div class="ui-widget-header ui-corner-top ui-table-top">
<h1><?php echo $this->_tpl_vars['header_text']; ?>
 </h1>
<div class="buttonwrapper">
   <input name="submit" value="ham" type="submit" class="cache_submit_button_plain" >
   <a class="squarebutton hambutton" href="#" onclick="document.cache.submit[0].click(); return false;"><span><?php echo $this->_tpl_vars['actionlang']['0']; ?>
</span></a>
  <input name="submit" value="spam" type="submit" class="cache_submit_button_plain" >
 <a class="squarebutton spambutton" href="#" onclick="document.cache.submit[1].click(); return false;"><span><?php echo $this->_tpl_vars['actionlang']['1']; ?>
</span></a>
  <input name="submit" value="delete" type="submit" class="cache_submit_button_plain" >
 <a class="squarebutton deletebutton" href="#" onclick="document.cache.submit[2].click(); return false;"><span><?php echo $this->_tpl_vars['actionlang']['2']; ?>
</span></a>
   <input name="submit" value="resend" type="submit" class="cache_submit_button_plain" >
 <a class="squarebutton resendbutton" href="#" onclick="document.cache.submit[3].click(); return false;"><span><?php echo $this->_tpl_vars['lang']['button_resend']; ?>
</span></a>
 <?php if ($this->_tpl_vars['pages']['total'] > 1): ?><span class="pager"><?php echo $this->_tpl_vars['links']; ?>
</span><?php endif; ?>
  </div>
  <div class="toggles">
  <?php echo $this->_tpl_vars['lang']['text_toggle']; ?>
 <a href="#" onClick="$(cache).allCheckboxes(); return false;">All</a>, 
  <a href="#" onClick="$(cache).noCheckboxes(); return false;">None</a>,
  <a href="#" onClick="$(cache).toggleCheckboxes(); return false;">Invert</a>
  </div>
</div>
<table class="ui-list-table" id="cachelist">
<tr>
  <td class="<?php echo $this->_tpl_vars['header_class']; ?>
 list-toggle" align="center"></td>

<td class="<?php echo $this->_tpl_vars['header_class']; ?>
" align="center">
<?php if ($this->_tpl_vars['cache_type'] == 'virus'): ?>
<?php echo $this->_tpl_vars['lang']['text_virus']; ?>

<?php elseif ($this->_tpl_vars['cache_type'] == 'attachment'): ?>
<?php echo $this->_tpl_vars['lang']['text_file_name']; ?>

<?php else: ?>
<a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=<?php echo $this->_tpl_vars['cache_type']; ?>
&amp;sort=<?php echo $this->_tpl_vars['sortby']['score']; ?>
"><?php echo $this->_tpl_vars['lang']['text_score']; ?>
</a>
<?php endif; ?>
</td>
<td class="<?php echo $this->_tpl_vars['header_class']; ?>
" align="center">
<a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=<?php echo $this->_tpl_vars['cache_type']; ?>
&amp;sort=<?php echo $this->_tpl_vars['sortby']['subject']; ?>
"><?php echo $this->_tpl_vars['lang']['text_subject']; ?>
</a></td>
<td class="<?php echo $this->_tpl_vars['header_class']; ?>
" align="center" width="150">
<a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=<?php echo $this->_tpl_vars['cache_type']; ?>
&amp;sort=<?php echo $this->_tpl_vars['sortby']['date']; ?>
"><?php echo $this->_tpl_vars['lang']['text_received']; ?>
</a></td>
<td class="<?php echo $this->_tpl_vars['header_class']; ?>
" align="center">
<a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=<?php echo $this->_tpl_vars['cache_type']; ?>
&amp;sort=<?php echo $this->_tpl_vars['sortby']['from']; ?>
"><?php echo $this->_tpl_vars['lang']['text_from']; ?>
</a></td>
<?php if ($this->_tpl_vars['need_to']): ?>
<td class="<?php echo $this->_tpl_vars['header_class']; ?>
" align="center">
<a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=<?php echo $this->_tpl_vars['cache_type']; ?>
&amp;sort=<?php echo $this->_tpl_vars['sortby']['to']; ?>
"><?php echo $this->_tpl_vars['lang']['text_to']; ?>
</a></td>
<?php endif; ?>
</tr>

<?php unset($this->_sections['hamloop']);
$this->_sections['hamloop']['name'] = 'hamloop';
$this->_sections['hamloop']['loop'] = is_array($_loop=$this->_tpl_vars['row']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hamloop']['show'] = true;
$this->_sections['hamloop']['max'] = $this->_sections['hamloop']['loop'];
$this->_sections['hamloop']['step'] = 1;
$this->_sections['hamloop']['start'] = $this->_sections['hamloop']['step'] > 0 ? 0 : $this->_sections['hamloop']['loop']-1;
if ($this->_sections['hamloop']['show']) {
    $this->_sections['hamloop']['total'] = $this->_sections['hamloop']['loop'];
    if ($this->_sections['hamloop']['total'] == 0)
        $this->_sections['hamloop']['show'] = false;
} else
    $this->_sections['hamloop']['total'] = 0;
if ($this->_sections['hamloop']['show']):

            for ($this->_sections['hamloop']['index'] = $this->_sections['hamloop']['start'], $this->_sections['hamloop']['iteration'] = 1;
                 $this->_sections['hamloop']['iteration'] <= $this->_sections['hamloop']['total'];
                 $this->_sections['hamloop']['index'] += $this->_sections['hamloop']['step'], $this->_sections['hamloop']['iteration']++):
$this->_sections['hamloop']['rownum'] = $this->_sections['hamloop']['iteration'];
$this->_sections['hamloop']['index_prev'] = $this->_sections['hamloop']['index'] - $this->_sections['hamloop']['step'];
$this->_sections['hamloop']['index_next'] = $this->_sections['hamloop']['index'] + $this->_sections['hamloop']['step'];
$this->_sections['hamloop']['first']      = ($this->_sections['hamloop']['iteration'] == 1);
$this->_sections['hamloop']['last']       = ($this->_sections['hamloop']['iteration'] == $this->_sections['hamloop']['total']);
?>
<?php echo '<tr class="'; ?><?php echo smarty_function_cycle(array('values' => ($this->_tpl_vars['body_class']).",".($this->_tpl_vars['alt_body_class'])), $this);?><?php echo '" id="row_'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '"><td class="list-toggle" align="center"><input type="checkbox" name="cache_item[generic]['; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo ']" value="'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '"></td><td align="center"><b>'; ?><?php if ($this->_tpl_vars['cache_type'] == 'virus'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['virus_name']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['cache_type'] == 'attachment'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['file']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['score']; ?><?php echo ''; ?><?php endif; ?><?php echo '</b></td><td align="left"><a id="link_'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '" class="thickbox HelpTipAnchor" href="view.php'; ?><?php echo $this->_tpl_vars['msid']; ?><?php echo 'mail_id='; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '&amp;cache_type='; ?><?php echo $this->_tpl_vars['cache_type']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['subject'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, $this->_tpl_vars['truncate_subject'], "...", 'UTF-8', true) : smarty_modifier_mb_truncate($_tmp, $this->_tpl_vars['truncate_subject'], "...", 'UTF-8', true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'UTF-8') : smarty_modifier_escape($_tmp, 'UTF-8')); ?><?php echo '</a><span id="tip_link_'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '"  class="HelpTip">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?><?php echo '</span></td><td align="center"><span class="HelpTipAnchor" id="received_date'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['received_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, $this->_tpl_vars['truncate_subject'], "...", true) : smarty_modifier_truncate($_tmp, $this->_tpl_vars['truncate_subject'], "...", true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'UTF-8') : smarty_modifier_escape($_tmp, 'UTF-8')); ?><?php echo '</span><span class="HelpTip" id="tip_received_date'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['received_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'UTF-8') : smarty_modifier_escape($_tmp, 'UTF-8')); ?><?php echo '</span></td><td align="center"><span class="HelpTipAnchor" id="sender'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['sender_email'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, $this->_tpl_vars['truncate_email'], "...", 'UTF-8', true) : smarty_modifier_mb_truncate($_tmp, $this->_tpl_vars['truncate_email'], "...", 'UTF-8', true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'UTF-8') : smarty_modifier_escape($_tmp, 'UTF-8')); ?><?php echo '</span><span class="HelpTip" id="tip_sender'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['sender_email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'UTF-8') : smarty_modifier_escape($_tmp, 'UTF-8')); ?><?php echo '</span></td>'; ?><?php if ($this->_tpl_vars['need_to']): ?><?php echo '<td align="center"><span class="HelpTipAnchor" id ="recipient'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '">'; ?><?php $_from = $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['recipient_email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['recip_to']):
?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['recip_to'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, $this->_tpl_vars['truncate_email'], "...", 'UTF-8', true) : smarty_modifier_mb_truncate($_tmp, $this->_tpl_vars['truncate_email'], "...", 'UTF-8', true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'UTF-8') : smarty_modifier_escape($_tmp, 'UTF-8')); ?><?php echo '<br>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span><span id="tip_recipient'; ?><?php echo $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['id']; ?><?php echo '" class="HelpTip">'; ?><?php $_from = $this->_tpl_vars['row'][$this->_sections['hamloop']['index']]['recipient_email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['recip_to']):
?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['recip_to'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'UTF-8') : smarty_modifier_escape($_tmp, 'UTF-8')); ?><?php echo '<br>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span></td>'; ?><?php endif; ?><?php echo '</tr>'; ?>

<?php endfor; endif; ?>

</table>
<div class="ui-widget-header ui-corner-bottom">
  <div class="toggles">
   <?php echo $this->_tpl_vars['lang']['text_toggle']; ?>
 <a href="#" onClick="$(cache).allCheckboxes(); return false;">All</a>, 
   <a href="#" onClick="$(cache).noCheckboxes(); return false;">None</a>,
   <a href="#" onClick="$(cache).toggleCheckboxes(); return false;">Invert</a>
   </div>
<div class="buttonwrapper">
   <input name="submit" value="ham" type="submit" class="cache_submit_button_plain" >
   <a class="squarebutton hambutton" href="#" onclick="document.cache.submit[0].click(); return false;"><span><?php echo $this->_tpl_vars['lang']['button_ham']; ?>
</span></a>

  <input name="submit" value="spam" type="submit" class="cache_submit_button_plain" >
 <a class="squarebutton spambutton" href="#" onclick="document.cache.submit[1].click(); return false;"><span><?php echo $this->_tpl_vars['lang']['button_spam']; ?>
</span></a> 
  <input name="submit" value="delete" type="submit" class="cache_submit_button_plain" >
 <a class="squarebutton deletebutton" href="#" onclick="document.cache.submit[2].click(); return false;"><span><?php echo $this->_tpl_vars['lang']['button_delete']; ?>
</span></a> 
   <input name="submit" value="resend" type="submit" class="cache_submit_button_plain" >
 <a class="squarebutton resendbutton" href="#" onclick="document.cache.submit[3].click(); return false;"><span><?php echo $this->_tpl_vars['lang']['button_resend']; ?>
</span></a> 
  <?php if ($this->_tpl_vars['pages']['total'] > 1): ?><span class="pager"><?php echo $this->_tpl_vars['links']; ?>
</span><?php endif; ?>
  </div>
</div>

<div align="center">
<a href="welcome.php<?php echo $this->_tpl_vars['msid']; ?>
">[<?php echo $this->_tpl_vars['lang']['link_welcome']; ?>
]</a>
</div>

</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "html_foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>