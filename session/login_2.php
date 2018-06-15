<meta charset="UTF-8">
<?php
session_start();
if(isset($_POST['ok'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    if($name=="mike" && $password == "123"){
        $_SESSION['name']=$name;
        header("location:user_list_1.php");
    }
    echo $name;
}
?>
<form method="post" action="">
用户名：<input type="text" name="name" id="name" value=""/><br>
密码：<input type="password" name="password" id="password" value=""/><br>
<input type="submit" name="ok" id="ok" value="ok">
</form>