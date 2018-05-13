<meta charset="utf-8">
<?php
require_once ("db_config.php");
/**
 重点题
 */
// echo "欢迎编辑！";
if(isset($_POST["ok"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $score=$_POST["score"];
    echo $id,$name,$score;
    $query_string="update  stuinfo set name='$name',score='$score' where id='$id'";
    mysqli_query($link,$query_string);
}else{
    $id=$_GET["id"];
}
$query_string="select * from stuinfo where id='$id'";
// echo $query_string;
$rs=mysqli_query($link,$query_string);
$row=mysqli_fetch_assoc($rs);
$name=$row["name"];
$score=$row["score"];
?>
<form id="form_1" method="POST" action="">
    <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
    姓名：<input type="text" id="name" name="name" value="<?php echo $name;?>"/><br>
    成绩：<input type="text" id="score" name="score" value="<?php echo $score?>"/><br>
    <input type="submit" id="ok" name="ok" value="ok">
</form>

<a href="mysql_list_2.php">返回列表</a>