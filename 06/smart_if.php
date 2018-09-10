<?php
require_once '../lib/MySmarty.php';
$smarty = new MySmarty();

$ranking = array('1' => 'PHP', '2' => 'Perl',
                 '3' => 'Java', '4' => 'Ruby',
                 '5' => 'Python');

$smarty->assign('name', 'PHP');
$smarty->assign('ranking', $ranking);

$smarty->display('if.tpl');