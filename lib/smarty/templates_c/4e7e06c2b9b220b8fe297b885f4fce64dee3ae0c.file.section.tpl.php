<?php /* Smarty version Smarty-3.1.14, created on 2018-09-04 19:19:23
         compiled from "/Users/kim/git/phprecipe/lib/smarty/templates/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19192668735b8e5c2b007644-10379933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e7e06c2b9b220b8fe297b885f4fce64dee3ae0c' => 
    array (
      0 => '/Users/kim/git/phprecipe/lib/smarty/templates/section.tpl',
      1 => 1382551532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19192668735b8e5c2b007644-10379933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'color' => 0,
    'name' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b8e5c2b090c57_72375102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8e5c2b090c57_72375102')) {function content_5b8e5c2b090c57_72375102($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>繰り返し処理したい</title>
</head>
<body>
<div>
<p>色/名前/価格</p>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['color']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
  色: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']], ENT_QUOTES, 'UTF-8');?>
<br>
  名称: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']], ENT_QUOTES, 'UTF-8');?>
<br>
  価格: &yen;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']], ENT_QUOTES, 'UTF-8');?>
<br>
<?php endfor; else: ?>
  データは空です。
<?php endif; ?>
</div>
</body>
</html>
<?php }} ?>