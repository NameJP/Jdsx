<?php
/* Smarty version 3.1.30, created on 2018-08-03 12:20:02
  from "C:\wamp64\www\test\180731\view\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b644872dd6185_41061392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8380894274f24f5bfc6160de6572606dcef9f19b' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\180731\\view\\message.html',
      1 => 1533298797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b644872dd6185_41061392 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提醒跳转</title>
</head>
<body>

	<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	<br>
	<b id="s"></b>秒后自动跳转
	<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">手工跳转</a>
	<?php echo '<script'; ?>
 type="text/javascript">
		setInterval(tiaoz,1000)
		var n = 3;
				document.querySelector('#s').innerHTML=n
		function tiaoz() {
			if (n>0){
				document.querySelector('#s').innerHTML=n
			}else{
				location.href = "{$url}"
			}
			--n
            console.log();
		}
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
