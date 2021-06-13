<!DOCTYPE html>
<html>
<head>
　<title>发言</title>
</head>
<body>
<?
　If ($words)
　　{ $link_ID=mysql_connect("main","root","123456")//服务器名加数据库用户名加密码;
　　mysql_select_db("abc"); //数据库名为abc
　　$time=date(y).date(m).date(d).date(h).date(i).(date(s); //取得当前时间
　　$str="INSERT INTO chat(chtime,nick,words) values
　　　　('$time','$nick','$words');" ;
　　mysql_query($str,$link_ID); //送出发言到数据库
　　mysql_close($link_ID);
　}
?>

//输入发言的表单

<form action=”speak.php” method=”post” target=” _self>
　<input type=”text” name=”words” cols=”20”>
　<input type=”submit” value=”发言”>
</form>
</body>
</html>