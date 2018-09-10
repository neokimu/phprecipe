<?php /* Smarty version Smarty-3.1.14, created on 2018-09-04 19:04:42
         compiled from "/Users/kim/git/phprecipe/lib/smarty/templates/foreach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16062698585b8e58ba801695-54219570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f66c256495b5ce12212c154f75de9f395b43510b' => 
    array (
      0 => '/Users/kim/git/phprecipe/lib/smarty/templates/foreach.tpl',
      1 => 1382551532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16062698585b8e58ba801695-54219570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ranking' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b8e58ba8a8fd9_80519056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8e58ba8a8fd9_80519056')) {function content_5b8e58ba8a8fd9_80519056($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>繰り返し処理したい</title>
</head>
<body>
<div>
<p>人気言語ランキング</p>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ranking']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
位 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
 <br>
<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
  ランキングはありません。
<?php } ?>
</div>
</body>
</html>
<?php }} ?>