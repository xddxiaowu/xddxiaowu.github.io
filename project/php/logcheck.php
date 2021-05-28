<?php
ob_start();
session_start();
include('conn.php');

if(!isset($_POST['submit'])){
	exit('非法访问!');
}

$email = $_POST['email'];
$password = md5($_POST['password']);

$che = mysqli_query($con,"select id from register where email = '$email' and password = '$password' limit 1");
$result = mysqli_fetch_array($che);
if ($result){
	$_SESSION['email']=$email;
	echo "<script>alert('恭喜你登录成功!\\n'+'1秒后自动跳转');</script>";	
	header('Refresh:1;url=../homepage.php');
	exit;
}
else{
	echo "<script>alert('登录失败!\\n'+'点击返回');history.back(-1);</script>";
	exit;
}
?>