<?php /* Smarty version Smarty-3.1.14, created on 2018-09-04 18:54:57
         compiled from "/Users/kim/git/phprecipe/lib/smarty/templates/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17880235605b8e56719ef311-65369485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18f62ad94ef142478ba38dcd19dc55f1a334ca0b' => 
    array (
      0 => '/Users/kim/git/phprecipe/lib/smarty/templates/filter.tpl',
      1 => 1382551532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17880235605b8e56719ef311-65369485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'string1' => 0,
    'string2' => 0,
    'string3' => 0,
    'string4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b8e5671a90b73_75276139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8e5671a90b73_75276139')) {function content_5b8e5671a90b73_75276139($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/kim/git/phprecipe/lib/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>フィルタを使いたい</title>
</head>
<body>
<div>
<p>strip_tags: <?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['string1']->value), ENT_QUOTES, 'UTF-8');?>
</p>
<p>date_format: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['string2']->value,"%Y年 %m月 %d日"), ENT_QUOTES, 'UTF-8');?>
</p>
<p>nl2br: <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['string3']->value, ENT_QUOTES, 'UTF-8', true));?>
</p>
<p>PHPのnumber_format()関数: <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['string4']->value), ENT_QUOTES, 'UTF-8');?>
</p>
</div>
</body>
</html>
<?php }} ?>