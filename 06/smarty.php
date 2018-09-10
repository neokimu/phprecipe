<?php

require_once '../lib/MySmarty.php';

$smarty = new MySmarty();

$smarty->assign('title', 'Hello World!');

$ad['word1'] = 'PHP逆引きレシピ';
$ad['word2'] = '発売中';

$smarty->assign('ad', $ad);
$smarty->assign('html_data', '<del>エスケープしない</del>');

$smarty->display('smarty.tpl');
