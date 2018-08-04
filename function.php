<?php

 function message($dx,$url,$msg)
{   
	$dx->assign('url',$url);
	$dx->assign('msg',$msg);
	$dx->display('message.html');
}

/**
 * 绝对的url
 * @param  string $control 控制器
 * @param  string $action  行为
 * @return string          地址
 */
function url($control,$action)
{  
    return 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?control=$control&action=$action";
      //关于SERVER的知识在第十四天第二劫
}
?>