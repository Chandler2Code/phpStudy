<meta charset="UTF-8">
<?php
//session操作
session_start();
if(isset($_SESSION['user'])){
   echo "helloword";
}else{
    echo "无权访问";
    echo "<a href='login.php'>login</a>";
}

