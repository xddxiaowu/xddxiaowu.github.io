<!DOCTYPE html>
<html>
<head>
　<title>显示用户发言</title>
　<meta http-equiv="refresh" content="5;url=cdisplay.php">
</head>
<body>
<?php
　$link_ID=mysql_connect("mysql","root","123456");
　//链接Mysql服务器 服务器名为main,管理员名为root,最后一串是我的密码
mysql_select_db(“abc”); //选择数据库（老板根据你的数据库的名字改一下）
　$str=”select * from chat ORDER BY chtime;” ; //查询字符串
　$result=mysql_query($str, $link_ID); //送出查询
　$rows=mysql_num_rows($result); //取得查询结果的记录笔数
　//取得最后15笔发言，并显示
　@mysql_data_seek($resut,$rows-15); //移动记录指针到前15笔记录
　if ($rows<15) $l=$rows; else $l=15; //记录总数小于15，则最多为该记录数
　for ($i=1;$i<=$l;$i++) {
　　list($chtime,$nick,$words)=mysql_fetch_row($result);
　　echo $chtime; echo “ “;echo $nick; echo”:” ; echo $words; echo “<BR>”;
　}
　//清除库中过时的数据
　@mysql_data_seek($result,$rows-20); //移动记录指针到前20笔记录
　list($limtime)=mysql_fetch_row($result);
　$str=”DELETE FROM chat WHERE chtime<’$limtime’ ;” ;
　$result=mysql_query($str,$link_ID); //送出查询字符串,库中只留前20个记录
　mysql_close($link_ID);
?>
</body>
</html>