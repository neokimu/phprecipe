<?php /* Smarty version Smarty-3.1.14, created on 2018-09-04 19:28:16
         compiled from "/Users/kim/git/phprecipe/lib/smarty/templates/global.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15478607005b8e5e4067c9e7-34800636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b1342b6ee4c205878278cf1bdfd9969bdfa067' => 
    array (
      0 => '/Users/kim/git/phprecipe/lib/smarty/templates/global.tpl',
      1 => 1382551532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15478607005b8e5e4067c9e7-34800636',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b8e5e40716886_75599739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8e5e40716886_75599739')) {function content_5b8e5e40716886_75599739($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>スーパーグローバル変数を取得したい</title>
</head>
<body>
<div>
<p>$_POSTの値（値を入力して「送信する」を押すと表示されます）</p>
<?php if (isset($_POST['example'])){?>
<p><?php echo htmlspecialchars($_POST['example'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<p>このファイル名とパス</p>
<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8');?>

<form method="post" action="smarty_super_global.php">
<p>入力してください</p>
<input type="text" name="example" value="">
<input type="submit" value="送信する">
</form>
</div>
</body>
</html>
<?php }} ?>