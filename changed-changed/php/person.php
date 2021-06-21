
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/person.css">
</head>



<body>
	<div id="container">
	<div id="nav">
		<ul>
			<li><a href="../homepage.php">Home<br>首页</a></li>
			<li><a href="#">Lost<br>失物</a></li>
			<li><a href="#">Found<br>寻物</a></li>
			<li><a href="#">Business cooperation<br>商务合作</a></li>
			<li><a href="#">Help<br>帮助</a></li>
			<li><a href="#">About us<br>关于我们</a></li>
			<br>
		</ul>		
	</div>
	<div id="alternative">
		<div id="logo">
			<a href="../homepage.php">
			<img src="../images/logo.gif" alt="">
			<div class="webname">Lost and Found失物招领</div>
			</a>	
		</div>		
	</div>
	<div id="seek">
		<form action="" class="parent">
			<div id="search">
			<input type="text" name="search" placeholder="请输入关键字" class="bts">
			<input type="button" name="" id="" class="btn">
			</div>
		</form>
	</div>


	<div id="welcome">
		<?php
			ob_start();
			session_start();
			include('conn.php');
			if(!isset($_SESSION['email'])){
				echo "<script>alert('未登录用户不允许访问!\\n'+'请返回登录');location.href='../login.html';</script>";
				exit;
				
			}
			else{
				$result = mysqli_query($con,"select * from register where email = '$_SESSION[email]' limit 1 ");
				$row =mysqli_fetch_array($result);
				echo "<img src='../images/logo.gif'><p class='one'>欢迎</p>".$row['username']."<br><a href='logout.php?action=logout'>注销</a><br><a href=''>修改密码</a><a href=''>发布失物招领</a>";
			}
		?>
	</div>




	<div id="footer">
			<div class="message">
				<img src="../images/weixin.png" class="weixin" alt="">
				<br>官方微信
			</div>
			<br>
			<hr>
			<ul>
				<li>Lost and Found失物招领 华东理工大学</li>
				<li></li>
				<li></li>
			</ul>
			
			<hr>
			<p>华东理工大学版权所有</p>
			<p>©Copyright2021 Lost and Found.com. All Rights Reserved.</p>
	</div>		
</body>
</html>