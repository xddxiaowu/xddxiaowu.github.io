<?php
$con = @mysqli_connect("localhost:3306","root","root");
$hh="<br/>";
if(!$con){
	die("连接失败：".mysqli_error($con));
}
// else{
// 	echo "连接成功";
// 	echo $hh;
// }
mysqli_select_db($con,"test");
mysqli_query($con,"set names utf8");
?>