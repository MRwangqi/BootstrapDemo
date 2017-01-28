<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/30
 * Time: 20:22
 */


if ($_POST) {

    $content = $_POST['content'];
    $user_id = $_GET['user_id'];
    $user_type = $_GET['user_type'];
 

	$host = 'localhost';
	$user = 'root';    
	$pass = '4dd46e3f';
	$db = 'wangqi';
	$link = mysqli_connect($host, $user, $pass, $db);
	mysqli_query($link, "set names 'utf8'");



    //如有图片的话
    if (isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
        $save = time() . $_FILES['file']['name'];
        if (@move_uploaded_file($_FILES['file']['tmp_name'], $save)) {

            $sql = "insert into license (user_id,business,img)VALUES ($user_id,'$content','$save')";

            $res = mysqli_query($link, $sql);

            if ($res) {
                Header("refresh:1 ; url=upload.php?user_id=$user_id&user_type=$user_type");
            } else {
                echo "database error";
            }
//            print "<script language=\"JavaScript\">\r\n";
//            print " alert(\"suceess\");\r\n";
//            print " history.back();\r\n";
//            print "</script>";
//            exit;

        } else {
            echo("Upload failure");
        }
    }

}

