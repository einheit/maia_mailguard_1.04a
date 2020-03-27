<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:31
  from '/var/www/html/maia/themes/desert_sand/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1c9f058c05_84810090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd229e6da8584cbdf107ab72c115b3b4d85205276' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/menu.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d1c9f058c05_84810090 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['use_logo']->value) {?>
<div id="logo">
    <?php if ($_smarty_tpl->tpl_vars['logo_url']->value) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" onmouseover="show_tooltip(this, event, '<?php echo $_smarty_tpl->tpl_vars['logo_alt_text']->value;?>
')" onmouseout="hide_tooltip()">
    <?php }?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;
echo $_smarty_tpl->tpl_vars['logo_file']->value;?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['logo_alt_text']->value;?>
">
    <?php if ($_smarty_tpl->tpl_vars['logo_url']->value) {?>
        </a>
    <?php }?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['showmenu']->value && !$_smarty_tpl->tpl_vars['is_a_visitor']->value) {?>

<p class="topbanner2"><?php echo $_smarty_tpl->tpl_vars['banner_title']->value;?>
</p>
<p class="topbanner3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['banner_subtitle'];?>
</p>
<br>
<p><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
<?php if ($_smarty_tpl->tpl_vars['hamcount']->value || $_smarty_tpl->tpl_vars['spamcount']->value || $_smarty_tpl->tpl_vars['viruscount']->value || $_smarty_tpl->tpl_vars['bannedcount']->value || $_smarty_tpl->tpl_vars['headercount']->value) {?>
<br>
<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['header_cache_contents'];?>
:</p>
<ul>
<?php if ($_smarty_tpl->tpl_vars['hamcount']->value) {?>
<li class="hamheader"><a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=ham"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_suspected_ham_item'];?>
 <?php echo $_smarty_tpl->tpl_vars['hamcount']->value;?>
</a></li>
<?php }
if ($_smarty_tpl->tpl_vars['spamcount']->value) {?>
<li class="suspected_spamheader"><a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=spam"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_suspected_spam_item'];?>
 <?php echo $_smarty_tpl->tpl_vars['spamcount']->value;?>
</a></li>
<?php }
if ($_smarty_tpl->tpl_vars['viruscount']->value) {?>
<li class="virusheader"><a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=virus"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_virus_item'];?>
 <?php echo $_smarty_tpl->tpl_vars['viruscount']->value;?>
</a></li>
<?php }
if ($_smarty_tpl->tpl_vars['bannedcount']->value) {?>
<li class="banned_fileheader"><a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=attachment"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_banned_file_item'];?>
 <?php echo $_smarty_tpl->tpl_vars['bannedcount']->value;?>
</a></li>
<?php }
if ($_smarty_tpl->tpl_vars['headercount']->value) {?>
<li class="bad_headerheader"><a href="list-cache.php<?php echo $_smarty_tpl->tpl_vars['msid']->value;?>
cache_type=header"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_bad_header_item'];?>
 <?php echo $_smarty_tpl->tpl_vars['headercount']->value;?>
</a></li>
<?php }?>
</ul>
<?php }?>
<br>
<ul>
  <li>
<a href="welcome.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" onmouseover="show_tooltip(this, event, '<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_welcome'];?>
')" onmouseout="hide_tooltip()">
            <?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/welcome.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_welcome'];?>
"><br>
            <?php }?>
            [ <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_welcome'];?>
 ]
        </a>
</li>
<?php if ($_smarty_tpl->tpl_vars['enable_stats_tracking']->value) {?>
<li>
          <a href="stats.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" onmouseover="show_tooltip(this, event, '<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_stats'];?>
')" onmouseout="hide_tooltip()">
            <?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/stats.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_stats'];?>
"><br>
            <?php }?>
            [ <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_stats'];?>
 ]
        </a>
</li>
    <?php }?>
<li>
        <a href="wblist.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" onmouseover="show_tooltip(this, event, '<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_whiteblacklist'];?>
')" onmouseout="hide_tooltip()">
            <?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/white-black-list.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_whiteblacklist'];?>
"><br>
            <?php }?>
            [ <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_whiteblacklist'];?>
 ]
        </a>
</li>
        
<li>
        <a href="settings.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" onmouseover="show_tooltip(this, event, '<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_settings'];?>
')" onmouseout="hide_tooltip()">
            <?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/settings.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_settings'];?>
"><br>
            <?php }?>
            [ <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_settings'];?>
 ]
        </a>
        </li>
<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>        
        <li>
        <a href="admindex.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" onmouseover="show_tooltip(this, event, '<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_admin'];?>
')" onmouseout="hide_tooltip()">
            <?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/admin-int.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_admin'];?>
"><br>
            <?php }?>
            [ <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_admin'];?>
 ]
        </a>
        </li>
    <?php }?>
<li>
          <a href="help.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" onmouseover="show_tooltip(this, event, '<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_help'];?>
')" onmouseout="hide_tooltip()">
            <?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/help.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_help'];?>
"><br>
            <?php }?>
            [ <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_help'];?>
 ]
        </a>
</li>
<li>
          <a href="logout.php<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" onmouseover="show_tooltip(this, event, '<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_logout'];?>
')" onmouseout="hide_tooltip()">
            <?php if ($_smarty_tpl->tpl_vars['use_icons']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/logout.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_logout'];?>
"><br>
            <?php }?>
            [ <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_logout'];?>
 ]
        </a>
</li>
  <?php }?>
</ul>
<br>
<p class="topbanner3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_version'];?>
</p>
<p class="topbanner4"><?php echo $_smarty_tpl->tpl_vars['MAIA_VERSION']->value;?>
</p>
<?php }
}
