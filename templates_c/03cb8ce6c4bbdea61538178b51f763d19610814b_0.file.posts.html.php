<?php
/* Smarty version 3.1.33, created on 2020-01-13 01:39:22
  from 'D:\xampp\New folder\htdocs\neyli\templates\posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1bbc3a60f813_65054186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03cb8ce6c4bbdea61538178b51f763d19610814b' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\neyli\\templates\\posts.html',
      1 => 1578875946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1bbc3a60f813_65054186 (Smarty_Internal_Template $_smarty_tpl) {
?><p><b><a href="index.php?page"> Към сайта</b></p>
<table class="table">
	<thead>
		<tr>
			<th>№</th>
			<th>Име</th>
			<th>email</th>
			<th>message</th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MESSAGES']->value, 'MESSAGE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MESSAGE']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['email'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['message'];?>
</td>
			<td>
				<a href="index.php?page=delete_message&id=<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['id'];?>
" class="btn btn-sm btn-danger">[DELETE]</a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>

</table>
<?php }
}
