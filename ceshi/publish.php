<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/publish.css">
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION['email'])){
			echo "<script>alert('未登录用户不允许发布信息!\\n'+'请返回登录');location.href='login.html';</script>";
			exit;		
		}
	?>
	<div id="container">
		<div id="nav">
			<ul>
				<li><a href="homepage.php">Home<br>首页</a></li>
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
		</div>


		<div class="publish">
			<h1>发布捡到的物品</h1><br>
			<hr>
			<form action="php/upload.php" method="post" enctype="multipart/form-data">
				<div class="item">
					<input type="text" placeholder="请输入物品的名称" name="item">
				</div>
				<div class="option">
					<select name="list" id="">
						<option value="card">校园卡钥匙</option>
						<option value="elecDevice">电子设备</option>
						<option value="cosmetic">化妆品</option>
						<option value="dailyitems">生活用品</option>
						<option value="certificate">证件</option>
						<option value="model">手办</option>
						<option value="others">其它</option>
					</select>
				</div>
				<div class="yourname">
					<input type="text" placeholder="你的名字" name="yourname">
				</div>
				<div class="tel">
					<input type="tel" placeholder="你的电话" name="tel">
				</div>
				<div class="date">
					<input type="date" placeholder="捡到的日期" name="date">
				</div>
				<div class="time">
					<input type="time" placeholder="具体时间" name="time">
				</div>
				<p>请上传物品的图片<input type="file" name="upfile" class="itemimg"></p>
				<textarea name="text" id="text" cols="30" rows="10" placeholder="具体描述" wrap="hard"></textarea>
	<!-- 			<input type="text" placeholder="具体描述" name="text" id="text"> -->
				<div class="submit">
					<input type="submit" id="btn" name="submit" value="发布信息">
				</div>
			</form>
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
</body>
</html>