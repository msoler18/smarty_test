<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-10 00:35:13
  from '/Users/miguelsoler/Documents/platzi/php/smartest/templates/basic-syntax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8fbf41a0a6c8_14439441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eacaf4979c8d07916df05496daa7a8e14f6c08a4' => 
    array (
      0 => '/Users/miguelsoler/Documents/platzi/php/smartest/templates/basic-syntax.tpl',
      1 => 1586478909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8fbf41a0a6c8_14439441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/usr/local/php5/Smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/usr/local/php5/Smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/usr/local/php5/Smarty/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),3=>array('file'=>'/usr/local/php5/Smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
?>





<?php $_smarty_tpl->_assignInScope('name', "Miguel Soler");
echo $_smarty_tpl->tpl_vars['name']->value;?>



<?php if ($_smarty_tpl->tpl_vars['name']->value) {?>
  Welcome to my page <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php } else { ?> 
  Welcome to my page nice person!!
<?php }?> 

<?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 2;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
  <?php }
}
?>

<?php $_smarty_tpl->_assignInScope('num1', 10);
$_smarty_tpl->_assignInScope('num2', 20);
$_smarty_tpl->_assignInScope('result', ((string)($_smarty_tpl->tpl_vars['num1']->value+$_smarty_tpl->tpl_vars['num2']->value)));
echo $_smarty_tpl->tpl_vars['result']->value;?>


<ul>
  <li><strong>Name:</strong><?php echo $_smarty_tpl->tpl_vars['first_person']->value['name'];?>
</li>
  <li><strong>Last name:</strong><?php echo $_smarty_tpl->tpl_vars['first_person']->value['last_name'];?>
</li>
  <li><strong>Job:</strong><?php echo $_smarty_tpl->tpl_vars['first_person']->value['job'];?>
</li>
  <li><strong>Email:</strong><?php echo $_smarty_tpl->tpl_vars['first_person']->value['email'];?>
</li>
  <li><strong>Phone:</strong><?php echo $_smarty_tpl->tpl_vars['first_person']->value['phone'];?>
</li>
</ul>


Is my name capitalized <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['me_capitalize']->value);?>


<p><?php echo ($_smarty_tpl->tpl_vars['girlfriend']->value).(" is beautiful ");?>
</p>

<p>My name is:<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['largest_name']->value);?>
and my name has <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['largest_name']->value, $tmp);?>
 characters.</p>

<?php ob_start();
echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['largest_name']->value, $tmp);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('words_name', $_prefixVariable1);?>

<?php if ($_smarty_tpl->tpl_vars['words_name']->value == 4) {?>
  <p>Person has a largest name</p>
<?php } else { ?>
  <p>Person hasn't a largest name</p>
<?php }?>

Short lorem :<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['largest_lorem']->value,20,"<br>");?>

<br>


<?php
$__section_identifier_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ids']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_identifier_0_total = $__section_identifier_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_identifier'] = new Smarty_Variable(array());
if ($__section_identifier_0_total !== 0) {
for ($__section_identifier_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_identifier']->value['index'] = 0; $__section_identifier_0_iteration <= $__section_identifier_0_total; $__section_identifier_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_identifier']->value['index']++){
?>
  id:<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_identifier']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_identifier']->value['index'] : null)];?>
<br />
<?php
}
}
?>

<?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>

<?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>


<?php echo smarty_function_mailto(array('address'=>"msoler735@gmail.com"),$_smarty_tpl);?>


<br>
<?php }
}
