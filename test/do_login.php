<?php
if ($_POST) {

    $user_type = $_POST['select'];

    //获取用户名、密码;
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];
    $user_pass = md5($user_pass);


    include 'connect.php';

    //使用SQL语句查询数据库;
    $sql = "select user_id from users where user_name = '$user_name' and user_type ='$user_type' and user_pass='$user_pass' limit 1";

    $res = mysqli_query($link, $sql);


    if (mysqli_affected_rows($link)) {

        $val = mysqli_fetch_array($res, MYSQLI_ASSOC);

        $user_id = $val['user_id'];

        //查找是否已经录入了用户信息，没有的跳转到信息界面
        $sql = "select * from user_info where user_id=$user_id";
        $res = mysqli_query($link, $sql);

        if (mysqli_affected_rows($link)) {
            header("Location:upload.php?user_id={$user_id}&user_type={$user_type}");
        } else {
            Header("refresh:1 ; url=userinfo.php?user_type=$user_type&user_id=$user_id");
        }

    } else {
        print "<script language=\"JavaScript\">\r\n";
        print " alert(\"login failure,please check your password\");\r\n";
        print " history.back();\r\n";
        print "</script>";
        exit;
    }

}


?>