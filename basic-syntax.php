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

$person_ids = [1,2,3,4,5,6,7,8];

$lorem = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, provident!';  

$smarty->assign('first_person',$person);

$smarty->assign('me_capitalize','miguel soler');

$smarty->assign('girlfriend','Paola Caicedo');

$smarty->assign('largest_name','miguel angel soler');

$smarty->assign('largest_lorem',$lorem);

$smarty->assign('ids',$person_ids);



$smarty->display('basic-syntax.tpl');


?>