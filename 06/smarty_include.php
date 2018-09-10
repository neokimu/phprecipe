<?php
require_once '../lib/MySmarty.php';
$smarty = new MySmarty();

$smarty->assign('title', 'テンプレートを分割したい');
$smarty->assign('body', 'Hello World!');

$smarty->display('include_index.tpl');

