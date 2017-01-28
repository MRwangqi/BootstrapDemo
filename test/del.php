<?php

//连接数据库;
	include_once "connect.php";

	$imgurl = $_GET['imgurl'];

	if(empty($imgurl))
	{
		echo "imgurl can not null;";
		die;
	}

	//删除文章
	$sql = "delete from uploadimg where imgurl='$imgurl'";


	$res = mysqli_query($link , $sql);

	if(mysqli_affected_rows($link) <=0){
		print "<script language=\"JavaScript\">\r\n"; 
		print " alert(\"not choose image{$sql}\");\r\n";
		print " history.back();\r\n"; 
		print "</script>"; 
		exit;
	}

		header("refresh:0 ; url=manage.php");

?>