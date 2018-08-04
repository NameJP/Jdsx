<?php
/* Smarty version 3.1.30, created on 2018-08-04 06:42:39
  from "C:\wamp64\www\test\180731\view\Goods\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b654adf86aa76_67851761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051ef6f643bfc779d410b77451bc4f16ac97c1ae' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\180731\\view\\Goods\\update.html',
      1 => 1533364946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b654adf86aa76_67851761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/> 
    <?php echo '<script'; ?>
 src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"><?php echo '</script'; ?>
>



    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="public/static/bootstrap-vue.min.css">
    
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" type="text/css" href="http://ueditor.baidu.com/umeditor/themes/default/css/umeditor.min.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="public/static/bootstrap-vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/static/editor/umeditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/static/editor/umeditor.min.js"><?php echo '</script'; ?>
>
    <title>Document</title>
    <style>
       .dis_goods{
           margin:auto;
       }
    </style>
</head>
<body>
     <div>update</div>
     <div class="DA">
     <!-- <template>
        <b-table :sort-by.sync="sortBy" :sort-desc.sync="sortDesc" hover :items="goods_data" :fields="table_key">

            <template slot="op" slot-scope="data">
                  <b-button size="sm" href="http://localhost/test/180731/index.php?">编辑</b-button>
            </template>
        </b-table>
    </template>  -->

    <b-form action="http://localhost/test/180731/index.php" method="post" enctype="multipart/form-data">
        <b-form-group label="商品名字">
            <b-form-input name="g_name"></b-form-input>
        </b-form-group >
        <b-form-group  label="商品价格">
               <b-form-input name="g_price"></b-form-input>
        </b-form-group>
        <b-form-group label="商品图片">
               <b-form-file name="img"> </b-form-file>
        </b-form-group> 
        <b-form-group label="商品描述">
            <textarea style=" width:100%" id="goods_content" name="g_introdunce"></textarea>
        </b-form-group>
           <b-form-group>
                <input type="hidden" name="control" value="Goods">
                <input type="hidden" name="action"  value="get">
               <b-button size="lg" type="submit" @click="index()">保存修改 </b-button>
           </b-form-group>
    </b-form>
    </div>
     <?php echo '<script'; ?>
>
           new Vue({
               el:'.DA',
               methods:{
                   index(){
                    this.$http.post('<?php echo url("Goods","index");?>
')
                 .then((rtnD)=>{
                 alert("添加成功");
                 window.location.href='<?php echo url("Goods","index");?>
';
            })
                   }
               }
           })
           var um=UM.getEditor('goods_content');
     <?php echo '</script'; ?>
>
</body>
</html><?php }
}
