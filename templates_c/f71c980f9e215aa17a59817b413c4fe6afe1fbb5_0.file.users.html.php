<?php
/* Smarty version 3.1.33, created on 2020-01-13 01:38:47
  from 'D:\xampp\New folder\htdocs\neyli\templates\users.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1bbc17a6bdd4_48303611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f71c980f9e215aa17a59817b413c4fe6afe1fbb5' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\neyli\\templates\\users.html',
      1 => 1578875923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1bbc17a6bdd4_48303611 (Smarty_Internal_Template $_smarty_tpl) {
?><p><b><a href="index.php?page"> Към сайта</b></p>

<style>
body {
  background-image: url("http://localhost/neyli/templates/image/podaryci.jpg");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<table class="table">
	<thead>
		<tr>
			<th>№</th>
			<th>Потребителско име</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS']->value, 'USER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['USER']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['USER']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['USER']->value['username'];?>
</td>
			<td>
				<a href="index.php?page=edit_user&id=<?php echo $_smarty_tpl->tpl_vars['USER']->value['id'];?>
" class="btn btn-sm btn-warning">[EDIT]</a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table><?php }
}
