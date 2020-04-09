<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-09 23:00:19
  from '/Users/miguelsoler/Documents/platzi/php/smartest/templates/basic-syntax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8fa903c8d5f3_14966157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eacaf4979c8d07916df05496daa7a8e14f6c08a4' => 
    array (
      0 => '/Users/miguelsoler/Documents/platzi/php/smartest/templates/basic-syntax.tpl',
      1 => 1586473218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8fa903c8d5f3_14966157 (Smarty_Internal_Template $_smarty_tpl) {
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


<?php }
}
