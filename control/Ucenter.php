<?php
  class Ucenter extends Auth{
       public function index(){
            echo "欢迎用户".$_SESSION['uname'];
           $this->display();              //Control 方法
       }
       public function menu(){
        $p_name="username='".$_SESSION['uname']."'";
         $selfinfo=$this->model('Users')->find($p_name);
         $this->assign('selfinfo',json_encode($selfinfo));
         $this->display();
       }  

       public function address(){
             $this->display();
       }
       public function getAddressData(){
        echo json_encode($this->model('address')->select());
       }
       public function getAddress(){
              $this->model('address')->insert(['address'=>$_POST['address']]);
       }
       public function getMenudata(){
         echo json_encode($this->model('Users')->find($_SESSION['uname']));
       }
      
  }
?>