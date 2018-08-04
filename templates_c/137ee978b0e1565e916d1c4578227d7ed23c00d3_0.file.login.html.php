<?php
/* Smarty version 3.1.30, created on 2018-08-03 12:18:22
  from "C:\wamp64\www\test\180731\view\User\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64480ea053d9_08932319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '137ee978b0e1565e916d1c4578227d7ed23c00d3' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\180731\\view\\User\\login.html',
      1 => 1533298625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b64480ea053d9_08932319 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>欢迎回来，请登陆</h1>
    <form action="<?php echo url('User','doLogin');?>
" method="post">
        <div class="form-group">
            <label >用户名</label>
            <input name="uname" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label >密码</label>
            <input name="upwd" type="text" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="登陆">
        </div>

    </form>
</div>
</body>
</html><?php }
}
