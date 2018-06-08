<meta charset="UTF-8">
<?php
//session操作
session_start();
if(isset($_SESSION['name'])){
   echo "helloword";
  echo "<br>";
   echo "欢迎".$_SESSION['name']."登录";
}else{
    echo "无权访问";
    echo "<a href='login_1.php'>login</a>";
}

