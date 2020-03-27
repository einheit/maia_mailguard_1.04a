<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 14:20:31
  from '/var/www/html/maia/themes/desert_sand/templates/html_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d1c9f03f187_77105936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce61806ee8e3b75f2c04086ec94ae598fccb4e4d' => 
    array (
      0 => '/var/www/html/maia/themes/desert_sand/templates/html_head.tpl',
      1 => 1585256359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5e7d1c9f03f187_77105936 (Smarty_Internal_Template $_smarty_tpl) {
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
<meta http-equiv="Refresh" content="<?php echo $_smarty_tpl->tpl_vars['session_timeout']->value;?>
; url=logout.php">
<link rel="stylesheet" TYPE="text/css" HREF="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/style.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="libs/jquery/thickbox.css" type="text/css" media="screen">
<link rel="stylesheet" href="libs/jquery/ui.slider.extras.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/css/jquery-ui-1.7.1.custom.css" type="text/css" media="screen">
<?php echo '<script'; ?>
 type="text/javascript" src="tooltips.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/jquery-1.4.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/selectToUISlider.jQuery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/thickbox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/jquery.dimensions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/jquery.bgiframe.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/jquery.hoverIntent.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/simpletip.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
/javascript/desert_sand.js"><?php echo '</script'; ?>
>


<!--[if lte IE 6]>

<?php echo '<script'; ?>
 type="text/javascript">
function correctPNG() // correctly handle PNG transparency in Win IE 5.5 or higher.
   {
   for(var i=0; i<document.images.length; i++)
      {
	  var img = document.images[i]
	  var imgName = img.src.toUpperCase()
	  if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
	     {
		 var imgID = (img.id) ? "id='" + img.id + "' " : ""
		 var imgClass = (img.className) ? "class='" + img.className + "' " : ""
		 var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
		 var imgStyle = "display:inline-block;" + img.style.cssText 
		 if (img.align == "left") imgStyle = "float:left;" + imgStyle
		 if (img.align == "right") imgStyle = "float:right;" + imgStyle
		 if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle		
		 var strNewHTML = "<span " + imgID + imgClass + imgTitle
		 + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
	     + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
		 + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>" 
		 img.outerHTML = strNewHTML
		 i = i-1
	     }
      }
   }
window.attachEvent("onload", correctPNG);
<?php echo '</script'; ?>
>
<![endif]-->

</head>
<body>
<div id="tooltip" style="position:absolute;visibility:hidden"></div>

<div id="container">
  <div id="menu" class="topbanner4">
      <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
  <div id="content"> <?php }
}
