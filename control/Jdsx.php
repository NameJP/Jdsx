<?php
//控制器
 class Jdsx extends Control{
     public function index(){
      $this->display();
     }
    //  public function add(){
    //     $this->display();
    //  }
     public function getDisGoods(){
          //调用GoodsModel
        // $this->model('Goods')->insert('goods',['g_name'=>$_GET['g_name']]);
        if(!empty($_POST['g_cate'])){;
        echo json_encode($this->model('Goods')->select($_POST['g_cate']));
        }else{
           echo "error";
           echo $_POST['g_cate'];
        }
     } 
     public function getHdp(){
      echo json_encode($this->model('Goods')->select('hdp'));
     }
     public function info(){
      $id = $_GET['id'];
      $info = $this->model('goods')->find("id=$id");
      $this->assign('info',$info);
      $this->display();

     }
}
?>