<?php
require_once 'head.php';

//print_r($_COOKIE);die();
// echo $_SESSION['admin'];die();
 //看自己倒底有沒有登入  
  //如果變1就是管理員
  //如果空白就是沒有登入


/*---- 程式結尾-----*/
$smarty->display('theme.tpl');