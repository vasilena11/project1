<?php
/* Smarty version 3.1.33, created on 2020-01-13 00:06:19
  from 'D:\xampp\New folder\htdocs\neyli\templates\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1ba66bcafe00_53634830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aaea3156c028cd594762ac41a2adb31fe491374' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\neyli\\templates\\register.html',
      1 => 1578870372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1ba66bcafe00_53634830 (Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Регистрация</a>
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Имейл</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Парола</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Повтори парола</label>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Регистрация</button>
</form><?php }
}
