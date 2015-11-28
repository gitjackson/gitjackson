<?php
header("Content-Type:text/html;charset=utf-8");
$mysqli=new mysqli("localhost","root","root","newsdb");
$result = $mysqli->query("select*from users where name='{$_POST["username"]}'");
if($result->num_rows>0){
	echo"<font color='red'>用户{$_POST["username"]}已经存在，不能使用!</font>";
	}else{
	echo"<font color='green'>用户{$_POST["username"]}恭喜您，用户名可以使用!</font>";
		}
?>