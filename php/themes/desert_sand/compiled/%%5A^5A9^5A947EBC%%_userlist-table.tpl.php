<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:12
         compiled from settings/_userlist-table.tpl */ ?>
<?php if ($this->_tpl_vars['user']): ?>
<div class="styledform ui-widget-content" id="userlist-table">
<fieldset>
<legend><?php echo $this->_tpl_vars['title']; ?>
</legend>
<ol>
<li>
<table class="ui-list-table">
      <tr>
        <?php if ($this->_tpl_vars['show_delete']): ?>
        <td class="menuheader2" align="center"><?php echo $this->_tpl_vars['lang']['header_delete']; ?>
</td>
        <?php endif; ?>
        <td class="menuheader2" align="center">
          <?php echo $this->_tpl_vars['user_header']; ?>

        </td>
        <td class="suspected_hambody3" align="center"><?php echo $this->_tpl_vars['lang']['ham_header']; ?>
</td>
        <td class="suspected_spambody3" align="center"><?php echo $this->_tpl_vars['lang']['spam_header']; ?>
</td>
        <td class="virusbody3" align="center"><?php echo $this->_tpl_vars['lang']['virus_header']; ?>
</td>
        <td class="banned_filebody3" align="center"><?php echo $this->_tpl_vars['lang']['banned_header']; ?>
</td>
        <td class="bad_headerbody3" align="center"><?php echo $this->_tpl_vars['lang']['badheader_header']; ?>
</td>
      </tr>
      <?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['row']):
?>
      <tr>
        <?php if ($this->_tpl_vars['show_delete']): ?>
        <td class="menubody2" align="center"><?php if ($this->_tpl_vars['key'] == "@."): ?>
              <?php echo $this->_tpl_vars['lang']['text_required']; ?>

          <?php else: ?>
              <input type="checkbox" name="domains[]" value="<?php echo $this->_tpl_vars['row']['domain_id']; ?>
">
          <?php endif; ?></td>
        <?php endif; ?>
        <td class="menubody2" align="center"><a href="ximpersonate.php<?php echo $this->_tpl_vars['msid']; ?>
id=<?php echo $this->_tpl_vars['row']['maia_user_id']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</a></td>
        <td class="suspected_hambody2" align="center"><?php echo $this->_tpl_vars['row']['ham']; ?>
</td>
        <td class="suspected_spambody2" align="center"><?php echo $this->_tpl_vars['row']['spam']; ?>
</td>
        <td class="virusbody2" align="center"><?php echo $this->_tpl_vars['row']['virus']; ?>
</td>
        <td class="banned_filebody2" align="center"><?php echo $this->_tpl_vars['row']['file']; ?>
</td>
        <td class="bad_headerbody2" align="center"><?php echo $this->_tpl_vars['row']['header']; ?>
</td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
</table>
</li>
      <?php if ($this->_tpl_vars['show_delete']): ?>
          <li>
            <label for="deleteaddresses" class="extendedquestion"><?php echo $this->_tpl_vars['lang']['text_delete_all_addresses']; ?>
</label>
            <input type="checkbox" name="deleteaddresses">
          </li>
          <li class="submitrow">
          <input type="submit" name="delete" value="<?php echo $this->_tpl_vars['lang']['button_delete']; ?>
">
          </li>
      <?php endif; ?>
</ol>
</fieldset>
</div>
<?php endif; ?>