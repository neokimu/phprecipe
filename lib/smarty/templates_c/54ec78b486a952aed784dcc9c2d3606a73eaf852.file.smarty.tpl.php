<?php /* Smarty version Smarty-3.1.14, created on 2018-09-04 18:26:43
         compiled from "/Users/kim/git/phprecipe/lib/smarty/templates/smarty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8081172475b8e4fd32732e1-72266898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54ec78b486a952aed784dcc9c2d3606a73eaf852' => 
    array (
      0 => '/Users/kim/git/phprecipe/lib/smarty/templates/smarty.tpl',
      1 => 1382551532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8081172475b8e4fd32732e1-72266898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'ad' => 0,
    'html_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b8e4fd32e5de6_54705542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8e4fd32e5de6_54705542')) {function content_5b8e4fd32e5de6_54705542($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Smartyを使いたい</title>
</head>
<body>
<div>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<br>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ad']->value['word1'], ENT_QUOTES, 'UTF-8');?>
<br>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ad']->value['word2'], ENT_QUOTES, 'UTF-8');?>
<br>
<?php echo $_smarty_tpl->tpl_vars['html_data']->value;?>

</div>
</body>
</html>
<?php }} ?>