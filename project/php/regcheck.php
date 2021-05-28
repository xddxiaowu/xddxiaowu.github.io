<style>
body{color:red;}
</style>
<?php
ob_start();
include('conn.php');
if(!isset($_POST['submit'])){
	exit('非法访问!');
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if(!$username){
	echo "<script>alert('用户名不能为空!\\n'+'点击返回');history.back(-1);</script>";	
	exit;
}

$notsamename = mysqli_query($con,"select username from register where username = '$username' limit 1");
if(mysqli_fetch_array($notsamename)){
	echo "<script>alert('用户名不能重名!\\n'+'点击返回');history.back(-1);</script>";
	exit;
}

if(!$email){
	echo "<script>alert('邮箱不能为空!\\n'+'点击返回');history.back(-1);</script>";	
	exit;
}

if(!preg_match('/^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/', $email)){
	echo "<script>alert('邮箱格式不对!\\n'+'点击返回');history.back(-1);</script>";
	exit;
}

$notsameemail = mysqli_query($con,"select email from register where email = '$email' limit 1");
if(mysqli_fetch_array($notsameemail)){
	echo "<script>alert('邮箱不能重名!\\n'+'点击返回');history.back(-1);</script>";
	exit;
}

if(!$password){
	echo "<script>alert('密码不能为空!\\n'+'点击返回');history.back(-1);</script>";	
	exit;
}

if(strlen($password)<6||strlen($password)>20){
	echo "<script>alert('密码长度不符合规定!\\n'+'点击返回');history.back(-1);</script>";	
	exit;	
}

if(!$repassword){
	echo "<script>alert('请确认密码!\\n'+'点击返回');history.back(-1);</script>";	
	exit;
}

if($password!=$repassword){
	echo "<script>alert('两次密码输入不同!\\n'+'点击返回');history.back(-1);</script>";	
	exit;	
}


$password = md5($password);
$repassword = md5($repassword);


$sql = "INSERT INTO register(username,email,password,repassword) 
VALUES('$username','$email','$password','$repassword')";

if(mysqli_query($con,$sql)){
	echo "<script>alert('恭喜你注册成功!\\n'+'3秒后自动跳转');</script>";	
	header('Refresh:3;url=../login.html');
	echo "等待跳转";
}
else{
	echo "<script>alert('注册失败!\\n'+'点击返回');history.back(-1);</script>";
	exit;
}
?>