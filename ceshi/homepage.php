<!DOCTYPE html>
<html>
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
		    </div>
		    <div class="clear"></div>
			<ul class="navigation">
				<li><a href="homepage.php">首页</a></li>
				<li>
					<a href="lost">失物招领</a>
					<ul>
						<li><a href="">全部</a></li>
						<li><a href="">校园卡钥匙</a></li>
						<li><a href="">电子设备</a></li>
						<li><a href="">化妆品</a></li>
						<li><a href="">生活用品</a></li>
						<li><a href="">证件</a></li>
						<li><a href="">手办</a></li>
						<li><a href="">其它</a></li>
					</ul>
				</li>
				<li><a href="find">寻物启事</a></li>
				<li><a href="partner">商业合作</a></li>
				<li><a href="help">帮助</a></li>
				<li><a href="about">关于我们</a></li>
			</ul>
		</div>


		<div id="main">
			<?php 
				require('php/conn.php');
				if(isset($_GET['page'])&&(int)$_GET['page']>0){
					$Page=$_GET['page'];
				}
				else{
					$Page=1;
				}
				$PageSize=2;
				$result2=mysqli_query($con,"select count(id) from itemmessage");
				$row2 = mysqli_fetch_row($result2);
				$RecordCount=$row2[0];
				$PageCount=ceil($RecordCount/$PageSize);
				$result2 = mysqli_query($con,"select * from itemmessage limit ".($Page-1)*$PageSize.",".$PageSize);
			 ?>
			 <?php
			 	while ($row2=mysqli_fetch_assoc($result2)){
			 ?>
			 <table >
			 	<tr>
			 		<th>物品:</th>
			 		<td><?php echo $row2['item'];?></td>
			 	</tr>
			 	<tr>
			 		<th>分类:</th>
			 		<td><?php echo $row2['list'];?></td>
			 	</tr>
			 	<tr>
			 		<th>捡到者:</th>
			 		<td><?php echo $row2['yourname'];?></td>
			 	</tr>
			 	<tr>
			 		<th>电话:</th>
			 		<td><?php echo $row2['tel'];?></td>
			 	</tr>
			 	<tr>
			 		<th>日期:</th>
			 		<td><?php echo $row2['date'];?></td>
			 	</tr>
			 	<tr>
			 		<th>具体时间:</th>
			 		<td><?php echo $row2['time'];?></td>
			 	</tr>
			 	<tr>
			 		<th>图片:</th>
			 		<td><?php echo "<p><img src='php/itemimg/$row2[newfilename]' style='width:200px;height:200px;'></p>";?></td>
			 	</tr>
			 	<tr>
			 		<th>描述:</th>
			 		<td class="tdtext"><?php echo $row2['text'];?></td>
			 	</tr>
			 	<?php }mysqli_free_result($result2);?>
			 </table>
			 <div class="clear"></div>
			 <p><?php
			 		if($Page==1){
			 			echo "第一页&nbsp上一页&nbsp";
			 		}
			 		else{
			 			echo "<a href='?page=1'>第一页&nbsp</a><a href='?page=".($Page-1)."'>上一页&nbsp</a>";
			 		}
			 		for($i=1;$i<=$PageCount;$i++){
			 			if($i==$Page){
			 				echo $i."&nbsp";
			 			}
			 			else{
			 				echo "<a href='?page=$i'>$i&nbsp</a>";
			 			}
			 		}
			 		if($Page==$PageCount){
			 			echo "下一页&nbsp末页";
			 		}
			 		else{
			 			echo "<a href='?page=".($Page+1)."'>下一页&nbsp</a><a href='?page=".$PageCount."'>末页</a>";
			 		}
			 		echo "&nbsp共".$RecordCount."条记录&nbsp";
			 		echo "$Page/$PageCount 页";
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