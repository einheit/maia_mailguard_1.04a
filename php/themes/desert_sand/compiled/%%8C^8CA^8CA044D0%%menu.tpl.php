<?php /* Smarty version 2.6.25-dev, created on 2020-03-26 15:09:06
         compiled from menu.tpl */ ?>

<?php if ($this->_tpl_vars['use_logo']): ?>
<div id="logo">
    <?php if ($this->_tpl_vars['logo_url']): ?>
        <a href="<?php echo $this->_tpl_vars['logo_url']; ?>
" onmouseover="show_tooltip(this, event, '<?php echo $this->_tpl_vars['logo_alt_text']; ?>
')" onmouseout="hide_tooltip()">
    <?php endif; ?>
        <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo $this->_tpl_vars['logo_file']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['logo_alt_text']; ?>
">
    <?php if ($this->_tpl_vars['logo_url']): ?>
        </a>
    <?php endif; ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['showmenu'] && ! $this->_tpl_vars['is_a_visitor']): ?>

<p class="topbanner2"><?php echo $this->_tpl_vars['banner_title']; ?>
</p>
<p class="topbanner3"><?php echo $this->_tpl_vars['lang']['banner_subtitle']; ?>
</p>
<br>
<p><?php echo $this->_tpl_vars['username']; ?>
</p>
<?php if ($this->_tpl_vars['hamcount'] || $this->_tpl_vars['spamcount'] || $this->_tpl_vars['viruscount'] || $this->_tpl_vars['bannedcount'] || $this->_tpl_vars['headercount']): ?>
<br>
<p><?php echo $this->_tpl_vars['lang']['header_cache_contents']; ?>
:</p>
<ul>
<?php if ($this->_tpl_vars['hamcount']): ?>
<li class="hamheader"><a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=ham"><?php echo $this->_tpl_vars['lang']['text_suspected_ham_item']; ?>
 <?php echo $this->_tpl_vars['hamcount']; ?>
</a></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['spamcount']): ?>
<li class="suspected_spamheader"><a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=spam"><?php echo $this->_tpl_vars['lang']['text_suspected_spam_item']; ?>
 <?php echo $this->_tpl_vars['spamcount']; ?>
</a></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['viruscount']): ?>
<li class="virusheader"><a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=virus"><?php echo $this->_tpl_vars['lang']['text_virus_item']; ?>
 <?php echo $this->_tpl_vars['viruscount']; ?>
</a></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['bannedcount']): ?>
<li class="banned_fileheader"><a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=attachment"><?php echo $this->_tpl_vars['lang']['text_banned_file_item']; ?>
 <?php echo $this->_tpl_vars['bannedcount']; ?>
</a></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['headercount']): ?>
<li class="bad_headerheader"><a href="list-cache.php<?php echo $this->_tpl_vars['msid']; ?>
cache_type=header"><?php echo $this->_tpl_vars['lang']['text_bad_header_item']; ?>
 <?php echo $this->_tpl_vars['headercount']; ?>
</a></li>
<?php endif; ?>
</ul>
<?php endif; ?>
<br>
<ul>
  <li>
<a href="welcome.php<?php echo $this->_tpl_vars['sid']; ?>
" onmouseover="show_tooltip(this, event, '<?php echo $this->_tpl_vars['lang']['menu_welcome']; ?>
')" onmouseout="hide_tooltip()">
            <?php if ($this->_tpl_vars['use_icons']): ?>
            <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/welcome.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['menu_welcome']; ?>
"><br>
            <?php endif; ?>
            [ <?php echo $this->_tpl_vars['lang']['menu_welcome']; ?>
 ]
        </a>
</li>
<?php if ($this->_tpl_vars['enable_stats_tracking']): ?>
<li>
          <a href="stats.php<?php echo $this->_tpl_vars['sid']; ?>
" onmouseover="show_tooltip(this, event, '<?php echo $this->_tpl_vars['lang']['menu_stats']; ?>
')" onmouseout="hide_tooltip()">
            <?php if ($this->_tpl_vars['use_icons']): ?>
            <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/stats.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['menu_stats']; ?>
"><br>
            <?php endif; ?>
            [ <?php echo $this->_tpl_vars['lang']['menu_stats']; ?>
 ]
        </a>
</li>
    <?php endif; ?>
<li>
        <a href="wblist.php<?php echo $this->_tpl_vars['sid']; ?>
" onmouseover="show_tooltip(this, event, '<?php echo $this->_tpl_vars['lang']['menu_whiteblacklist']; ?>
')" onmouseout="hide_tooltip()">
            <?php if ($this->_tpl_vars['use_icons']): ?>
            <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/white-black-list.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['menu_whiteblacklist']; ?>
"><br>
            <?php endif; ?>
            [ <?php echo $this->_tpl_vars['lang']['menu_whiteblacklist']; ?>
 ]
        </a>
</li>
        
<li>
        <a href="settings.php<?php echo $this->_tpl_vars['sid']; ?>
" onmouseover="show_tooltip(this, event, '<?php echo $this->_tpl_vars['lang']['menu_settings']; ?>
')" onmouseout="hide_tooltip()">
            <?php if ($this->_tpl_vars['use_icons']): ?>
            <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/settings.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['menu_settings']; ?>
"><br>
            <?php endif; ?>
            [ <?php echo $this->_tpl_vars['lang']['menu_settings']; ?>
 ]
        </a>
        </li>
<?php if ($this->_tpl_vars['admin']): ?>        
        <li>
        <a href="admindex.php<?php echo $this->_tpl_vars['sid']; ?>
" onmouseover="show_tooltip(this, event, '<?php echo $this->_tpl_vars['lang']['menu_admin']; ?>
')" onmouseout="hide_tooltip()">
            <?php if ($this->_tpl_vars['use_icons']): ?>
            <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/admin-int.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['menu_admin']; ?>
"><br>
            <?php endif; ?>
            [ <?php echo $this->_tpl_vars['lang']['menu_admin']; ?>
 ]
        </a>
        </li>
    <?php endif; ?>
<li>
          <a href="help.php<?php echo $this->_tpl_vars['sid']; ?>
" onmouseover="show_tooltip(this, event, '<?php echo $this->_tpl_vars['lang']['menu_help']; ?>
')" onmouseout="hide_tooltip()">
            <?php if ($this->_tpl_vars['use_icons']): ?>
            <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/help.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['menu_help']; ?>
"><br>
            <?php endif; ?>
            [ <?php echo $this->_tpl_vars['lang']['menu_help']; ?>
 ]
        </a>
</li>
<li>
          <a href="logout.php<?php echo $this->_tpl_vars['sid']; ?>
" onmouseover="show_tooltip(this, event, '<?php echo $this->_tpl_vars['lang']['menu_logout']; ?>
')" onmouseout="hide_tooltip()">
            <?php if ($this->_tpl_vars['use_icons']): ?>
            <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
images/logout.png" border="0" alt="<?php echo $this->_tpl_vars['lang']['menu_logout']; ?>
"><br>
            <?php endif; ?>
            [ <?php echo $this->_tpl_vars['lang']['menu_logout']; ?>
 ]
        </a>
</li>
  <?php endif; ?>
</ul>
<br>
<p class="topbanner3"><?php echo $this->_tpl_vars['lang']['text_version']; ?>
</p>
<p class="topbanner4"><?php echo $this->_tpl_vars['MAIA_VERSION']; ?>
</p>