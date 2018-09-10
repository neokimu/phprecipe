<?php
require_once '../lib/MySmarty.php';
$smarty = new MySmarty();

$smarty->assign('string1', '<b>PHP逆引き</b>');
$smarty->assign('string2', '2013/04/01');
$smarty->assign('string3', "改行を\n含む");
$smarty->assign('string4', 1000);

$smarty->display('filter.tpl');

