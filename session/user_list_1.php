<meta charset="UTF-8">
<?php
session_start();
if(isset($_SESSION['name'])){
    echo "欢迎".$_SESSION['name']."登录";
}else{
    echo "无权访问";
}
