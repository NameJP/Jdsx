<?php
/* Smarty version 3.1.30, created on 2018-08-03 13:51:39
  from "C:\wamp64\www\test\180731\view\Ucenter\address.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b645deb474364_94545750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b8722d66965f7775a609ed488f2646049908b7' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\180731\\view\\Ucenter\\address.html',
      1 => 1533304295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b645deb474364_94545750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>收货地址</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
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
    .nowadd{
        height: 200px;
        width: 800px;
        background: #CCCCCC;
    }
    .address{
        width: 970px;
        height: 970px;
        position: absolute;
        top: 130px;
        left: 300px;
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
<div class="view">
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
        </div>
    <div class="address">
            <h1>您的收货地址</h1>
        <div class="nowadd">
            <div v-for="n in address_data">{{n.address}}</div>
        </div>
        <h2>新增收货地址</h2>
            <form action="<?php echo url('Ucenter','getAddress');?>
" method="post">
                <div class="form-group">
                    <label >请输入新地址</label>
                    <input name="address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
    </div>
</div>
</div>
<?php echo '<script'; ?>
>
    new Vue({
        el:'.view',
        data:{
            address_data:[],
        },
        mounted(){
            this.$http.get('http://localhost/test/180731/index.php?control=Ucenter&action=getAddressData')
            .then((rtnD)=>{
                this.address_data=rtnD.data;
                console.log(this.address_data);
            })
        }
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
