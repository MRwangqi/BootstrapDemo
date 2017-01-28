<?php


//获取用户名，密码;
$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];
$user_repwd = $_POST['user_repwd'];
$user_type = $_POST['select'];//buyer  seller


if(empty($user_name)||empty($user_pass)){
    print "<script language=\"JavaScript\">\r\n";
    print " alert(\"Passwords are not null\");\r\n";
    print " history.back();\r\n";
    print "</script>";
    exit; 
   
}


//判断密码是否一致;
if ($user_pass != $user_repwd) {
    print "<script language=\"JavaScript\">\r\n";
    print " alert(\"Passwords are not consistent\");\r\n";
    print " history.back();\r\n";
    print "</script>";
    exit;
}

include 'connect.php';

$user_id = time();//以当前时间为注册的id

//判断当前的用户是否存在注册并且商户类型也存在
$sql = "select * from users where user_name='$user_name' and user_type='$user_type'";

$res = mysqli_query($link, $sql);

$val = mysqli_fetch_array($res, MYSQLI_ASSOC);


//判断当前用户是否已存在
if ($val['user_name'] == null) {

    $user_pass = md5($user_pass);//加密

    $sql = "insert into users (user_id,user_name,user_pass,user_type) values ('$user_id','$user_name','$user_pass','$user_type')";

    $rs = mysqli_query($link, $sql);
    echo '<center><h1>Regist Success</h1></center>';
    Header("refresh:1 ; url=userinfo.php?user_type=$user_type&user_id=$user_id");
} else {
    print "<script language=\"JavaScript\">\r\n";
    print " alert(\"Regist failure,User is Exit\");\r\n";
    print " history.back();\r\n";
    print "</script>";
    exit;
}

