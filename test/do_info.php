<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-12-27
 * Time: 下午9:13
 */

if ($_POST) {
    $user_id = $_GET['user_id'];
    $user_type = $_GET['user_type'];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $business_name = $_POST['business_name'];
    $address_1 = $_POST['address_1'];
    $address_2 = $_POST['address_2'];
    $twon_city = $_POST['twon_city'];
    $country_state = $_POST['country_state'];


    include 'connect.php';

    $sql = "insert into user_info (user_id,user_type,first_name,last_name,email,business_name,address_1,address_2,twon_city,country_state)
                           values ('$user_id','$user_type','$first_name','$last_name','$email','$business_name','$address_1','$address_2','$twon_city','$country_state')";

    $rs = mysqli_query($link, $sql);


    if ($rs) {

        if ($user_type == 'buyer') {//如果是商家的话
            Header("refresh:1 ; url=license.php?user_id=$user_id&user_type='$user_type'");
        } else {
            Header("refresh:1 ; url=upload.php?user_id=$user_id&user_type='$user_type'");
        }

    } else {
        echo "database is error";
    }
}