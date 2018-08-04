<?php
/* Smarty version 3.1.30, created on 2018-08-04 07:59:26
  from "C:\wamp64\www\test\180731\view\Goods\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b655cdee287e4_12060657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579df26318b45e8e0faa9075572ebbe9c951dac5' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\180731\\view\\Goods\\index.html',
      1 => 1533369563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b655cdee287e4_12060657 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"><?php echo '</script'; ?>
>
    <title>Document</title>
    <style>
       .dis_goods{
           margin:auto;
       }
       .dis_inc{
           margin:auto;
           width:100px;
           height:50px;
           color:#fff;
           background-color:cornflowerblue;
           text-align: center;
           line-height: 50px;
           border-radius: 5px;
           cursor: pointer;
       }
       .dis_inc a{
        color:#fff;
         text-decoration: none;
       }
       a{
           display:inline-block;
       }
    </style>
</head>
<body>
     <div>ManageGoods.index</div>
     <div class="DA">
     <!-- <template>
        <b-table :sort-by.sync="sortBy" :sort-desc.sync="sortDesc" hover :items="goods_data" :fields="table_key">

            <template slot="op" slot-scope="data">
                  <b-button size="sm" href="http://localhost/test/180731/index.php?">编辑</b-button>
            </template>
        </b-table>
    </template>  -->
    <div class="dis_inc"><a @click="add()">添加商品</a></div>
    <div>
        <form>
        <select v-model="g_cate">
            <option value="">All</option>
            <option value="hdp">幻灯片</option>
            <option value="shangou">计时商品</option>
        </select>
        <input type="button" @click="search()" class="dis_inc" value="进行搜索">
        </form>
    </div>
       <table class="dis_goods" width=1000px cellspacing=50px cellpadding=10px border="1px solid #222" style="text-align: center">
     
           <tr>
               <th>商品ID</th>
               <th>商品名称</th>
               <th>商品价格</th>
               <th>商品存放路径</th>
               <th>商品分类</th>
               <th colspan="2">操作</th>
           </tr>
           <tr v-for="n in goods_data">
               <td>{{n.id}}</td>
               <td>{{n.g_name}}</td>
               <td>{{n.g_price}}</td>
               <td>{{n.g_thumb}}</td>
               <td>{{n.g_cate}}</td>
               <td><a @click="dele(n.id)">删除</a></td>
               <td><a :href="'http://localhost/test/180731/index.php?control=Goods&action=update&id='+n.id">编辑</a></td>
           </tr>
       </table>
    </div>
     <?php echo '<script'; ?>
>
        Vue.http.options.emulateJSON = true;      //???不是很了解
        new Vue({
            el:'.DA',
            data:{
                sortBy: 'age',
     	 		sortDesc: false,
                  g_cate:'',
               goods_data:[],
            },
            created(){
                this.$http.post('<?php echo url("Goods","getGoodsList");?>
')
                .then((rtnD)=>{
                     this.goods_data=rtnD.data;
                     console.log(this.goods_data);
                })
            },
            methods:{
                add(){
                    this.$http.post('<?php echo url("Goods","add");?>
')          
                    .then((rtnD)=>{
                        window.location.href='<?php echo url("Goods","add");?>
';
                    })
                },
                 dele(s){
                     this.$http.post('<?php echo url("Goods","dele");?>
',{
					  id:s
				 })
                 .then((rtnD)=>{
                    alert("删除成功！");
                    window.location.href='<?php echo url("Goods","index");?>
';
                 })
                },
                search(){
                //     this.$http.post('<?php echo url("Goods","getGoodsList");?>
',{
				// 	  g_cate:this.g_cate
				//  })
                //  .then((rtnD)=>{
                //      console.log(this.g_cate);
                //     this.goods_data=rtnD.data;
                //      console.log(this.goods_data);
                //  })
                    this.$http.post('<?php echo url("Goods","getGoodsList");?>
',{
					  g_cate:this.g_cate
				 })
                 .then((rtnD)=>{
                     console.log(this.g_cate);
                    this.goods_data=rtnD.data;
                     console.log(this.goods_data);
                 })
                },
            },
        })
     <?php echo '</script'; ?>
>
</body>
</html><?php }
}
