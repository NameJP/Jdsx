<?php
/* Smarty version 3.1.30, created on 2018-08-03 09:08:42
  from "C:\wamp64\www\test\180731\view\User\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b641b9aca1c42_97540297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06cfd898b5a2c1ee845c9036e78a5a1b2a2f4860' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\180731\\view\\User\\register.html',
      1 => 1533195293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b641b9aca1c42_97540297 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >

</head>
<body>
<div class="container">
<h1>欢迎新用户注册</h1>
<form action="http://localhost/test/180731/index.php?" method="post">
    <div class="form-group">
        <label >用户名</label>
        <input name="uname" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label >密码</label>
        <input name="upwd" type="text" class="form-control">
    </div>
    <div class="form-group">
        <input type="hidden" name="control" value="User">
        <input type="hidden" name="action" value="doReg">
        <input type="submit" class="btn btn-primary">

    </div>

</form>
</div>
</body>
</html><?php }
}
