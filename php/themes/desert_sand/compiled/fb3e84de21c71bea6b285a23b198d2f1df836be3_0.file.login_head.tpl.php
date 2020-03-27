<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:19:56
  from '/var/www/html/maia/themes/desert_sand/templates/login_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1c7cc4ff76_59486587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb3e84de21c71bea6b285a23b198d2f1df836be3' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/login_head.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d1c7cc4ff76_59486587 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>
<?php echo $_smarty_tpl->tpl_vars['banner_title']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['lang']->value['banner_subtitle'];?>

</title>
<meta name="author" content="Robert LeBlanc">
<meta name="copyright" content="Copyright 2004 Robert LeBlanc, All Rights Reserved">
<meta name="description" content="Maia Mailguard, a spam and virus management system for mail servers">
<meta name="keywords" lang="en" content="maia,amavis,virus,spam,spamassassin,mail">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['html_charset']->value;?>
">
<link rel="stylesheet" TYPE="text/css" HREF="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/style.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="tooltips.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/jquery-1.4.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/jquery-ui.min.js"><?php echo '</script'; ?>
>

</head>
<body>
<div id="tooltip" style="position:absolute;visibility:hidden"></div>

<br><br>

<div align="center">
<p><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;
echo $_smarty_tpl->tpl_vars['logo_file']->value;?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['logo_alt_text']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['logo_width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['logo_height']->value;?>
"><br>
<span style="font-size: 140%;"><strong><?php echo $_smarty_tpl->tpl_vars['banner_title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['MAIA_VERSION']->value;?>
</strong></span><br>
<span style="font-size: 120%;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['about'];?>
</strong></span></p>
<?php }
}
