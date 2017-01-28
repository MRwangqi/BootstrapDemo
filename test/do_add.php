<?php

//获取用户值;
	$title = $_POST['title'];
	$content = $_POST['content'];

	if(empty($title)||empty($content))
	{
		print "<script language=\"JavaScript\">\r\n"; 
		print " alert(\"title or content is not null！\");\r\n";
		print " history.back()";
		print "</script>";
		exit;
	}

//连接数据库;
	include_once  "connect.php";


//获取字数函数;
	function strLength($str)
	{
 	   $length = strlen(preg_replace('/[\x00-\x7F]/', '', $str));
 	   $arr['en'] = strlen($str) - $length;
  	   $arr['cn'] = intval($length / 3);
  	   return $arr['en']+$arr['cn'];
	}

//获取content长度;
	$length = strLength($content);

//利用SQL语句插入获取的信息;
	$sql = "insert into article (id,title,content,word_length)values(null,'$title','$content','$length')";

//使用MYSQLI_QUERY()语句
	$res = mysqli_query($link , $sql);

//判断是否写入成功;
	if($res)
	{
		print "<script language=\"JavaScript\">\r\n"; 
		print " alert(\"add sucess！\");\r\n";
		print "</script>"; 
		header("refresh:0 ; url = upload.php");
	}else
	{
		echo "<center><h1>wirte fair，please again</h1></center>";
		header("refresh:2 ; url = upload.php");
	}