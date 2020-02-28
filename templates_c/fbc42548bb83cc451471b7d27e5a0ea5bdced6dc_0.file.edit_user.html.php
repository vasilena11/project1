<?php
/* Smarty version 3.1.33, created on 2020-01-13 01:27:23
  from 'D:\xampp\New folder\htdocs\neyli\templates\edit_user.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1bb96b444b80_76324508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbc42548bb83cc451471b7d27e5a0ea5bdced6dc' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\neyli\\templates\\edit_user.html',
      1 => 1578875213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1bb96b444b80_76324508 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	
	$( function() {
		$( "input[name='email']" ).autocomplete({
			source: "index.php?page=ajax",
			dataType: 'json',
			minLength: 2,
			select: function( event, ui ) {
				alert( "Selected: " + ui.item.value + " aka " + ui.item.id );
			}
		});
	} );
	
<?php echo '</script'; ?>
>

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Имейл</label>
    <input value="<?php echo $_smarty_tpl->tpl_vars['USER']->value['username'];?>
" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label>Нов имейл</label>
    <input type="text" name="username" class="form-control">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Актуализиране</button>
</form><?php }
}
