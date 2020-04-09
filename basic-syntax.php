<?php 
require('./setup.php');

$smarty = new Smarty_Test;

$person = [
  'name' => 'Miguel',
  'last_name' => 'Soler',
  'job' => 'developer',
  'email' => 'msoler735@gmail.com',
  'phone' => 3508324231
];

$smarty->assign('first_person',$person);

$smarty->display('basic-syntax.tpl');


?>