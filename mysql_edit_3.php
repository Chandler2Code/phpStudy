<meta charset="utf-8">
<?php
require_once ("db_config.php");
// 获取点击事件后更新数据
if(isset($_POST["ok"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $old_name=$_POST['old_name'];
    $score=$_POST["score"];
    $query_string_old="select count(*) old from stuinfo where name='$old_name'";
    $query_string_new="select count(*) new from stuinfo where name='$name'";
    $old=mysqli_query($link,$query_string_old);
    $new=mysqli_query($link,$query_string_new);
    $row_new=mysqli_fetch_assoc($new);
    $row_old=mysqli_fetch_assoc($old);
    $counter_new=$row_new['new'];
    $counter_old=$row_old['old'];
    //新增数据时候的操作
    if($id==""){
        $new_id = uniqid();
        // echo $row['counter'];
        //判断数据条数
        if( $counter_new == 0){
            $query_string="insert into stuinfo(id,name,score) VALUES (' $new_id','$name','$score')";
            mysqli_query($link,$query_string);
        }else{
            echo "姓名已经存在！请重新填写";
        }
    }
  else{
       // echo $id,$name,$score,$old_name;
    //    echo $counter_new,$counter_old;
       if($counter_new==0 and $counter_old>=1){
          $query_string="update  stuinfo set name='$name',score='$score' where id='$id'";
          mysqli_query($link,$query_string);
       }
       else{
        echo "名字修改失败，该名字已经被注册";
       }
    }
}
    $id=$_GET["id"];
    $query_string="select * from stuinfo where id='$id'";
    // echo $query_string;
    $rs=mysqli_query($link,$query_string);
    $row=mysqli_fetch_assoc($rs);
    $name=$row["name"];
    $score=$row["score"];
?>
<form id="form_1" method="POST" action="">
    <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
    <input type="hidden" id="old_name" name="old_name" value="<?php echo $name;?>">
    姓名：<input type="text" id="name" name="name" value="<?php echo $name;?>"/><br>
    成绩：<input type="text" id="score" name="score" value="<?php echo $score?>"/><br>
    <input type="submit" id="ok" name="ok" value="ok">
</form>

<a href="mysql_list_2.php">返回列表</a>