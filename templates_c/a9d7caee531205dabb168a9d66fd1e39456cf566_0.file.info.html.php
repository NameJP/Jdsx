<?php
/* Smarty version 3.1.30, created on 2018-08-04 08:46:12
  from "C:\wamp64\www\test\180731\view\jdsx\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6567d44f4ad0_41966414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d7caee531205dabb168a9d66fd1e39456cf566' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\180731\\view\\jdsx\\info.html',
      1 => 1533207908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6567d44f4ad0_41966414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"><?php echo '</script'; ?>
>
	<title>Document</title>
	<style>
	*{
		padding:0;
		margin:0;
	}
	.more{
		width:940px;
		height:350px;
		margin:auto;
		display: flex;
	}
	.more_img{
		width:350px;
		height:350px;
         background-color: brown;
	}
    .more_img img{
		width:350px;
		height:350px;
	}
	.more_content{
		width: 100%;
	}
	.more_content_title{
           color:#757676;
		   font-size:18px;
		   margin: 0 10px;
	}
	.more_content_1{
		color:#e5454a;
		font-size:12px;
	}
	.more_content_2{
		height:140px;
		background-color: #f3f3f3;
	}
	.more_content_2_first{
		color: #b5b5b5;
    width: 600px;
    margin: auto;
    display: flex;
	  line-height:30px;
	}
	.more_content_2_first .more_price{
		color:#e4393c;
	   display: inline-block;
	   margin: auto;
	}
	.fontbig{
		font-size:20px;
	}
	.more_content_2_first_space{
		width:375px;
		height:100%;
	}
	.more_content_2_first_pj{
		float:right;
		border-left: solid 1px #e6e6e6;
       text-align: center;
       padding: 0 10px;
       line-height: 15px;
	}
	.more_content_3{
      width:600px;
	  margin:auto;
	  background-color:#fff;
	  height:50px;
	}
	.gbuy_btn{
         background-color: #df3033;
		 color:#fff;
		 font-size:21px;
		 width:140px;
		 height:50px;
		 float:left;
		 text-align: center;
		 line-height: 50px;
	}
	.more_introduce{
		width:940px;
		height:auto;
		margin:50px auto;

	}
	.more_introduce .more_introduce_head{
		width:100%;
		height:50px;
		color:#fff;
		font-size:15px;
		background-color: #f7f7f7;
		border-bottom:1px solid #e4393c;
	}
    .more_introduce_head_1{
		width:150px;
		height:45px;
		float:left;
		background-color: #e4393c;
		color:#fff;
		text-align: center;
		line-height: 45px;
	}
	.more_introduce_head_1_gw{
        float:right;
		width:135px;
		height:35px;
		line-height: 35px;
		margin-top:10px;
	}
    </style>
</head>
<body>
    <div class="more">
		<div class="more_img">
			<img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['g_thumb'];?>
">
		</div>
		<div class="more_content">
			<div class="more_content_title"><?php echo $_smarty_tpl->tpl_vars['info']->value['g_introduce'];?>
</div>
			<div class="more_content_1">【京东配送】夏季爆款， 随箱附赠吸管，到货即可开果享用！<a href="">镇店之宝红心火龙果6枚装</a></div>
			<div class="more_content_2">
				<div class="more_content_2_first">
					京东价<div class="more_price">
							 ￥<div class="more_price fontbig"><?php echo $_smarty_tpl->tpl_vars['info']->value['g_price'];?>
</div>
						</div>
						<div class="more_content_2_first_space"></div>
						<div class="more_content_2_first_pj">
							累计评价
							<div>2.8万+</div>
						</div>
				</div>
				<div class="more_content_2_second"></div>
				<div class="more_content_2_third"></div>
			</div>
			<div class="more_content_3">
				<div class="gbuy_btn">加入购物车</div>
			</div>
		</div>
			
	</div>
	<div class="more_introduce">
		<div class="more_introduce_head">
			<div class="more_introduce_head_1">商品介绍</div>
			<div class="more_introduce_head_1 more_introduce_head_1_gw">加入购物车</div>
		</div>
		<div class="more_introduce_body">
			sdfadfasdfasdf
		</div>
	</div>


</body>
</html><?php }
}
