<?php /* Smarty version Smarty-3.1.14, created on 2018-09-04 19:23:36
         compiled from "/Users/kim/git/phprecipe/lib/smarty/templates/if.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14612108575b8e5d2804e9e3-52671659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db45ff249f40a61b7904e15bf185048fab75fda7' => 
    array (
      0 => '/Users/kim/git/phprecipe/lib/smarty/templates/if.tpl',
      1 => 1382551532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14612108575b8e5d2804e9e3-52671659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'ranking' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b8e5d28127714_79070600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8e5d28127714_79070600')) {function content_5b8e5d28127714_79070600($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>条件分岐したい</title>
</head>
<body>
<div>
<?php if (isset($_smarty_tpl->tpl_vars['name']->value)&&$_smarty_tpl->tpl_vars['name']->value=='PHP'){?>
  <p>「PHP逆引きレシピ」はおすすめ書籍です。</p>
<?php }elseif($_smarty_tpl->tpl_vars['name']->value=='Perl'){?>
  <p>PHPはおすすめ言語です。</p>
<?php }?>
<p>人気言語ランキング</p>
<?php if (is_array($_smarty_tpl->tpl_vars['ranking']->value)&&(count($_smarty_tpl->tpl_vars['ranking']->value)>0)){?>
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
<?php }?>
</div>
</body>
</html>
<?php }} ?>