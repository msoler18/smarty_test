<?php
require('./setup.php');

$smarty = new Smarty_Test;

$smarty->assign('name','Miguel');

$smarty->display('index.tpl');


?>