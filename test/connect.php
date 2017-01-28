<?php
/**
 * 连接数据库
 */

	$host = 'localhost';
	$user = 'root';    
	$pass = '';
	$db = 'wangqi';
	$link = mysqli_connect($host, $user, $pass, $db) or die("error");
	mysqli_query($link, "set names 'utf8'");
	
