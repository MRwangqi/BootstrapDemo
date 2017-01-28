<?php


$user_id = $_GET['user_id'];
$user_type = $_GET['user_type'];

$host = 'localhost';
	$user = 'root';    
	$pass = '4dd46e3f';
	$db = 'wangqi';
	$link = mysqli_connect($host, $user, $pass, $db);
	mysqli_query($link, "set names 'utf8'");

if (isset($_FILES['file_photo']['name']) && !empty($_FILES['file_photo']['name'])) {
    $save_phpto = time() . $_FILES['file_photo']['name'];
    if (@move_uploaded_file($_FILES['file_photo']['tmp_name'], $save_phpto)) {

        $sql = "insert into upload_img (user_id,imgurl,type)VALUES ($user_id,'$save_phpto',$user_type)";

        $res = mysqli_query($link, $sql);

        if ($res) {
            echo "photo uploading sucess" . "</br>";
        } else {
            echo "database error";
        }
    }

}
if (isset($_FILES['file_id']['name']) && !empty($_FILES['file_id']['name'])) {
    $save_id = time() . $_FILES['file_id']['name'];
    if (@move_uploaded_file($_FILES['file_id']['tmp_name'], $save_id)) {
        $sql = "insert into upload_img (user_id,imgurl,type)VALUES ($user_id,'$save_id',$user_type)";

        $res = mysqli_query($link, $sql);

        if ($res) {
            echo "id uploading sucess" . "</br>";
        } else {
            echo "database error";
        }
    }
}

if (isset($_FILES['file_address']['name']) && !empty($_FILES['file_address']['name'])) {
    $save_address = time() . $_FILES['file_address']['name'];

    if (@move_uploaded_file($_FILES['file_address']['tmp_name'], $save_address)) {
        $sql = "insert into upload_img (user_id,imgurl,type)VALUES ($user_id,'$save_address',$user_type)";

        $res = mysqli_query($link, $sql);

        if ($res) {
            echo "address uploading sucess" . "</br>";
        } else {
            echo "database error";
        }
    }
}



