<?php
/* Smarty version 3.1.33, created on 2020-01-12 00:49:50
  from 'D:\xampp\New folder\htdocs\ayli\templates\posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1a5f1ee5db29_46470831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3080a33bc2bcad5e6ba64042433d58ba7a2f7d4b' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\ayli\\templates\\posts.html',
      1 => 1578786584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1a5f1ee5db29_46470831 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
	<thead>
		<tr>
			<th>№</th>
			<th>Име</th>
			<th>email</th>
			<th>subject</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['subject'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['message'];?>
</td>
			<td>
				<a href="index.php?page=edit_post&id=<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['id'];?>
" class="btn btn-sm btn-warning">[EDIT]</a>
				<a href="index.php?page=delete_post&id=<?php echo $_smarty_tpl->tpl_vars['MESSAGES']->value['id'];?>
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
