<?php
	ob_start();
	include ('conn.php');
	$upload_dir = getcwd()."\\itemimg\\";
	if(!is_dir($upload_dir)){
		mkdir($upload_dir);
	}
	function makefilename(){
		$curtime = getdate();
		$filename = $curtime['year'].$curtime['mon'].$curtime['mday'].
		$curtime['hours'].$curtime['minutes'].$curtime['seconds'].".jpg";
		return $filename;
	}

	$yourname = $_POST['yourname'];
	$list = $_POST['list'];
	$item = $_POST['item'];
	$tel = $_POST['tel'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$text = $_POST['text'];



	$newfilename = makefilename();
	$newfile = $upload_dir.$newfilename;
	if(file_exists($_FILES['upfile']['tmp_name'])){
		move_uploaded_file($_FILES['upfile']['tmp_name'], $newfile);
		$sql = "INSERT INTO itemmessage(item,list,yourname,tel,date,time,newfilename,text) 
		VALUES('$item','$list','$yourname','$tel','$date','$time','$newfilename','$text')";
		if(mysqli_query($con,$sql)){
		echo "<script>alert('上传成功!\\n'+'3秒后自动跳转');</script>";	
		header('Refresh:3;url=../homepage.php');
		echo "等待跳转";
	}
	else{
	echo "<script>alert('上传失败!\\n'+'点击返回');history.back(-1);</script>";
	exit;
}
		echo "<p><img src='itemimg/$newfilename' style='width:100px;height:100px;'></p>";
		echo $newfilename;
		echo "<br>".$item;
		echo "<br>".$list;
		echo "<br>".$yourname;
		echo "<br>".$tel;
		echo "<br>".$date;
		echo "<br>".$time;
		echo "<br>".$text;

	}
	else{
		echo "上传失败";
		var_dump($_FILES['upfile']);
	}
?>