<?php
   // 获取get的数据
   //  $_GET  获取提交的用户名
   $name = $_GET['username'];

   //准备一个数据 模拟已经存在的用户名
   $nameArr = array('xiaoming','www','jack','rose');

   //验证 输入框里的用户名是否存在数组中
   // in_array 返回 布尔类型的结果
    $result = in_array($name,$nameArr);
    
   //通过 if else 返回不同的值 给浏览器
   if($result){
      echo 'no';
   }else{
   	  echo 'succ';
   }
?>
