<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-09 23:22:31
  from '/Users/miguelsoler/Documents/platzi/php/smartest/templates/scaping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8fae37f32cd5_30332395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8adcb9948ea2fb6ab1c549c757ae3611fda8fac' => 
    array (
      0 => '/Users/miguelsoler/Documents/platzi/php/smartest/templates/scaping.tpl',
      1 => 1586474550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8fae37f32cd5_30332395 (Smarty_Internal_Template $_smarty_tpl) {
?>My name is <?php echo $_smarty_tpl->tpl_vars['name']->value;?>


<?php echo '<script'; ?>
 language="javascript">
  var person = "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
  function sayMyname(){
    console.log(`Hello ${person}`);
  }

  sayMyname();
<?php echo '</script'; ?>
><?php }
}
