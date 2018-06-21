<meta charset="UTF-8">
<?php
require_once("db_config.php");
session_start();
if(isset($_POST['ok'])){
    $name = $_POST['user_name'];
    $password = $_POST['password'];
    $select_user = "select * from user_170  where user_name ='$name'";
    $rs = mysqli_query($link,$select_user);
    $row=mysqli_fetch_assoc($rs);
    $password_w = $row["password"];
    if($password_w == md5($password)){
        $_SESSION['session_name']=$name;
        header("location:user_info.php");
    }
    // echo $name;
}
?>
<form method="post" action="">
姓名：<input type="text" name="user_name" id="user_name" value=""/><br>
密码：<input type="password" name="password" id="password" value=""/><br>
<input type="submit" name="ok" id="ok" value="ok">
</form>
