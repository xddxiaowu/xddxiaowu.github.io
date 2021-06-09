<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>失物招领Lost and Found</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/homepage.css">
	
	<script src="js/turnoff.js"></script>
</head>
<body>
	<div id="container">
		<div id="nav">
			<input type="checkbox" id="checkbox">
			<label for="checkbox">
				<img src="images/navbar2.png">
				<i class="navbar"></i>
			</label>
			<ul>
				<li>
				    <img src="images/user.jpg" alt="error">
					    <span>欢迎您！</span>
					
					
				</li>
				<li>
					<a href="homepage.php">
					  <span>Home<br>首页</span>
				    </a>
				</li>
				<li>
					<a href="#">
						<span>Lost<br>失物</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Found<br>寻物</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Business cooperation<br>商务合作</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Help<br>帮助</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>About us<br>关于我们</span>
					</a>
				</li>
				<br>
			</ul>		
		</div>
		<div id="alternative">
			<div id="logo">
				<a href="homepage.php">
				<img src="images/logo.gif" alt="">
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
			<a href="publish.php">发布<img src="images/send.svg" alt=""></a>
		</div>


		
		<div id="leftside">
			<div class="login">
			<?php
				ob_start();
				session_start();
				include('php/conn.php');
				if(!isset($_SESSION['email'])){
					echo "<a href='register.html' id='register'>注册</a> ︱
					<a href='login.html' id='login'>登录</a>";
				
				}
				else{
					$result1 = mysqli_query($con,"select * from register where email = '$_SESSION[email]' limit 1 ");
					$row1 =mysqli_fetch_array($result1);
					echo "<p id='welcome'>欢迎您</p>".$row1['username']."<p id='welcome'><a href='php/person.php'>进入</a>个人中心</p>";
				}
			?>
			 </p>
		</div>




		<div id="rightside">
			关闭广告<img id="close" src="images/close.svg" alt="" onclick="turnoff('rightside')">
			<a id="ad" href="http://www.minecraft.net"><img src="images/minecraft.jpg" alt=""></a>
		</div>



		<div id="footer">
				<div class="message">
					<img src="images/weixin.png" class="weixin" alt="">
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
	</div>

</body>
</html>