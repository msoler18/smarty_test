<?php 
require('./setup.php');

$smarty = new Smarty_Test;

$smarty->left_delimiter = '<!--{';

$smarty->right_delimiter = '}-->';

$smarty->assign('name','Miguel is a full stack');

$smarty->display('scaping.tpl');

?>