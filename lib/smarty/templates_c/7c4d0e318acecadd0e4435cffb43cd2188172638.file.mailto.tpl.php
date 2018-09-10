<?php /* Smarty version Smarty-3.1.14, created on 2018-09-04 19:32:50
         compiled from "/Users/kim/git/phprecipe/lib/smarty/templates/mailto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12076927115b8e5f52103116-39248355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c4d0e318acecadd0e4435cffb43cd2188172638' => 
    array (
      0 => '/Users/kim/git/phprecipe/lib/smarty/templates/mailto.tpl',
      1 => 1382551532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12076927115b8e5f52103116-39248355',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b8e5f5215e8d6_39162260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8e5f5215e8d6_39162260')) {function content_5b8e5f5215e8d6_39162260($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/Users/kim/git/phprecipe/lib/smarty/plugins/function.mailto.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>メールアドレスの難読化でスパム対策したい</title>
</head>
<body>
<div>
<p>指定なし<br>
<?php echo smarty_function_mailto(array('address'=>'newuser@example.jp'),$_smarty_tpl);?>
</p>
<p>hexを指定<br>
<?php echo smarty_function_mailto(array('address'=>'newuser@example.jp','encode'=>'hex'),$_smarty_tpl);?>
</p>
<p>javascriptを指定<br>
<?php echo smarty_function_mailto(array('address'=>'newuser@example.jp','encode'=>'javascript'),$_smarty_tpl);?>
</p>
<p>javascript_charcodeを指定<br>
<?php echo smarty_function_mailto(array('address'=>'newuser@example.jp','encode'=>'javascript_charcode'),$_smarty_tpl);?>
</p>
</div>
</body>
</html>
<?php }} ?>