<?php /* Smarty version Smarty-3.1.14, created on 2018-09-04 18:43:49
         compiled from "/Users/kim/git/phprecipe/lib/smarty/templates/include_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:940185995b8e53d5a61d47-93042665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ad7a5abb35bd75f9e8380ccb871b0737ef4cc6' => 
    array (
      0 => '/Users/kim/git/phprecipe/lib/smarty/templates/include_index.tpl',
      1 => 1382551532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '940185995b8e53d5a61d47-93042665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b8e53d5ae5ca0_90540418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8e53d5ae5ca0_90540418')) {function content_5b8e53d5ae5ca0_90540418($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</title>
</head>
<body>
<div>

<?php echo $_smarty_tpl->getSubTemplate ("include_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['body']->value, ENT_QUOTES, 'UTF-8');?>
</p>

<?php echo $_smarty_tpl->getSubTemplate ("include_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>