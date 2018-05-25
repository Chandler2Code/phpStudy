<meta charset="utf-8">
<?php
require_once("db_config1.php");//数据连接的配置文件
//计算表的总记录数
$query_string="select count(*) as counter from user_70";
$rs=mysqli_query($link,$query_string);
$row=mysqli_fetch_assoc($rs);
$max_rows=$row['counter'];//总记录数
$rows_of_page=3;//每一页显示的记录数
$where_string="";
if(isset($_POST['ok'])){
	$name=$_POST['name'];
	$score=$_POST['score'];
	//$where_string="select * from stuinfo ";
	if($name!=""){
		$where_string=$where_string." where name like '%$name%' ";
	}
//	if($score!=""){
//		$where_string=$where_string."and score='$score' ";
//	}
	
	
}

if(isset($_GET['action'])){
	$offset=$_GET['offset'];
	$action=$_GET['action'];
	if($action=="top"){
		$offset=0;
	}
	if($action=="pre"){
	//前一页
	if($offset<=0){
		$offset=0;
	}else{
	$offset=$offset-$rows_of_page;
	}
	}
	if($action=="next"){
		//后一页
		if(($offset+$rows_of_page)>=$max_rows){
			
		}else{
		$offset=$offset+$rows_of_page;
		}
	}
	if($action=="bottom"){
		$a=$max_rows%$rows_of_page;
		if($a==0){
			$offset=$max_rows-$rows_of_page;
		}else{
			$offset=$max_rows-$a;
		}
	}
//	if($_GET['where_string']!=""){
//		$where_string=$_GET['where_string'];
//	}
}else{
	$offset=0;
}

//$rs=mysqli_query($link,"select * from stuinfo");
$query_string="select * from user_70 $where_string limit $offset,$rows_of_page";
echo "$query_string";//输出查询语句，验证查询是否正确
$rs=mysqli_query($link,$query_string);
echo "<table border=1>";
?>
<!--增加查询功能-->
<form action="" method="POST">
<tr>
<td colspan="3">
姓名：<input type="text" id="name" name="name" value="">
成绩：<input type="text" id="score" name="score" value="">
<input type="submit" id="ok" name="ok" value="查询"/>
</td>
</tr>
</form>
<?php
echo "<tr><td>姓名</td><td>地址</td><td>密码</td></tr>";
while ($row=mysqli_fetch_assoc($rs)){//遍历数据表，渲染出数据
	echo"<tr>";
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["address"]."</td>";
	echo "<td>".$row["password"]."</td>";
	echo"</tr>";
}
echo "<tr>";
echo "<td colspan=3>
<a href='list_72.php?action=top&offset=$offset'>首页</a>|
<a href='list_72.php?action=pre&offset=$offset'>前一页</a>
|
<a href='list_72.php?action=next&offset=$offset&where_string=$where_string'>后一页</a>
|
<a href='list_72.php?action=bottom&offset=$offset'>末页</a>
</td>
";
echo "</tr>";
echo "</table>";