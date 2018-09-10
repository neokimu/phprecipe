<?php
require_once '../lib/MySmarty.php';

$smarty = new MySmarty();

$color = array('黄', '緑', '紫');
$names = array('レモン', 'ほうれん草', 'ぶどう');
$price = array('100', '80', '200');

$smarty->assign('color', $color);
$smarty->assign('name', $names);
$smarty->assign('price', $price);

$smarty->display('section.tpl');