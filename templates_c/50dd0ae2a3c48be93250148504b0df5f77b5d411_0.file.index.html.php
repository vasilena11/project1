<?php
/* Smarty version 3.1.33, created on 2020-01-12 23:47:18
  from 'D:\xampp\New folder\htdocs\neyli\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1ba1f6f08372_54907983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50dd0ae2a3c48be93250148504b0df5f77b5d411' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\neyli\\templates\\index.html',
      1 => 1578869235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1ba1f6f08372_54907983 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>


<br>


<div class="container-fluid">
	<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<div class="alert alert-danger" role="alert">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
			<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
		<div class="alert alert-success" role="alert">
			<?php echo $_smarty_tpl->tpl_vars['success']->value;?>

		</div>
	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

</body>
</html>
<?php }
}
