<?php
/* Smarty version 3.1.30, created on 2018-08-04 09:32:38
  from "C:\wamp64\www\test\180731\view\Ucenter\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6572b6a31220_82616629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f942afcf84c2543e61064a259af05f7e960373c' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\180731\\view\\Ucenter\\menu.html',
      1 => 1533375156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6572b6a31220_82616629 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户中心</title>
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"><?php echo '</script'; ?>
>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .header{
        height: 110px;
        background: #e2231a;
    }
    .header a{
        text-decoration: none;
    }
    .box{
        width: 1200px;
        height: 80px;
        margin: 0 auto;
        position: relative;
    }

    .topnav{
        height: 30px;
        background: #e3e4e5;
    }
    .topnav a{
        display: inline-block;
        float: right;
        margin: 0 10px;
        padding: 5px 10px;
        border-right: 1px solid #999;
        color: #999999;
        font-size: 12px;
    }
    .logo_a{

        font-size: 20px;
        margin: 20px 0 0 6px;
        height: 22px;
        color: white;
        position: absolute;
        left: 170px;
    }
    .logo_aa{
        position: absolute;
        margin: 5px 0 0;
        color: #ffb2b2;
        border: 1px solid #ffb2b2;
        height: 18px;
        line-height: 18px;
        padding: 0 10px;
        border-radius: 10px;
        top:45px;
        left: 170px;
        font-size: 12px;
    }
    .topright{
        width: 700px;
        height: 80px;
        float: right;
        line-height: 80px;
    }
    .float{
     color: white;
        margin-right: 20px;

    }
    .inp{
        height: 40px;
        border: none;
        margin-right: 10px;
        text-align: center;
    }
    .conBox{
        height: 1000px;
        background: #f5f5f5;
    }
    .inner{
        width: 1200px;
        height: 900px;
        margin: 0 auto;
       padding: 30px;
        position: relative;
    }
    .inner_ul{
        width: 150px;

        background: #f5f5f5;

    }
    .inner_ul li{
        margin-top: 10px;


    }
    .inner_ul li a{
        color: #777;
        text-decoration: none;
    }
    .inner_ul li a:hover{
        text-decoration: underline;
        color:#e2231a ;
    }
    .cur{
        color: #e2231a;
    }
    .neiyong{
        width: 970px;
        height: 900px;
        background: white;
        position: absolute;
        top: 30px;
        left: 170px;
        padding: 20px 50px;
    }
    .neiyong a{
        color: #777;
        text-decoration: none;
        display: inline-block;
        margin-right: 30px;
    }
    .neiyong .ctr{
        text-decoration: underline;
        color:#e2231a ;
    }
    .usermsg{
        padding: 30px 50px;
    }
    .usermsg  .alldiv{
        margin-top: 20px;
        color: #999999;
    }

    .p_sex input{
        margin-left: 20px;

    }

</style>
<body>
<div class="header">
    <div class="topnav"><a href="">我的订单</a><a href="">我的京东</a><a href="">我的订单</a><a href="">我的订单</a></div>
    <div class="box">
    <img src="../../public/static/images/logo.png" alt="">
        <a href="#" class="logo_a">我的京东</a>
        <a href="" class="logo_aa">返回京东首页</a>
        <div class="topright">
        <span class="float shouye">首页</span>
        <span class="float setcount">账户设置</span>
        <span class="float socal">社区</span>
        <span class="float msg">消息</span>
            <input type="text" class="inp" placeholder="搜索">
            <input type="text" class="inp" placeholder="加入购物车">
        </div>
    </div>
</div>

<div class="conBox">
    <div class="inner">
        <ul class="inner_ul">设置
            <li>
                <a class="cur" href="<?php echo url('Ucenter','menu');?>
">个人信息</a>
            </li>
            <li>
                <a href="">用户安全</a>
            </li>
            <li>
                <a href="">我的尺码</a>
            </li>
            <li><a href="">账号绑定</a> </li>
            <li><a href="<?php echo url('Ucenter','address');?>
">收货地址</a> </li>
            <li><a href="">健康档案</a> </li>
            <li><a href="">分享绑定</a> </li>
            <li><a href="">快捷支付</a> </li>
            <li><a href="">企业发票</a> </li>
            <li><a href="">采购需求</a> </li>
        </ul>
         <div class="neiyong">
             <a   @click="change_goods(0)" :class="{'ctr':box_code == 0}">基本信息</a>
             <a   @click="change_goods(1)" :class="{'ctr':box_code == 1}">头像照片</a>
             <div class="usermsg" v-if="box_code == 0">
                 <form action="http://localhost/test/180731/index.php?">
                 <div class="alldiv p_name">用户名:</div><span>{{p_data.username}}</span>
                 <div class="alldiv p_age">年龄:</div><span></span>
                 <div class="alldiv p_sex">性别:
                     <input value="男" class="male" checked="checked" type="checkbox">男
                     <input value="女" class="female" type="checkbox">女
                 </div>
                <div class="alldiv">
                    <input type="submit" value="修改信息">
                </div>
            </form>
             </div>

             <div class="alldiv myimg" v-if="box_code == 1">
                 <input type="file" value="上传图片">
             </div>
         </div>
    </div>

</div>
<?php echo '<script'; ?>
>
    new Vue({
        el:'.conBox',
        data:{
            box_code:0,
            p_data:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['selfinfo']->value;?>
'),
        },
        mounted(){
           console.log('<?php echo $_smarty_tpl->tpl_vars['selfinfo']->value;?>
');
        },
        methods:{
            change_goods(code){
                // 数据驱动
                this.box_code = code
            },
        }
    });


<?php echo '</script'; ?>
>
</body>
</html><?php }
}
