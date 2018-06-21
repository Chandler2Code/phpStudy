<?php
/**
 * mysql配置
 */
$address = "localhost";//数据库ip地址
$username ="user_20180618_58017";//数据库用户名
$password = "GYq4DlApuSp95NS";//数据库密码
$database = "exam_20180618_58017";//连接数据库的名字

$link = mysqli_connect($address,$username,$password,$database) or die("connect error");
mysqli_query($link,"use exam_20180618_58017");
echo mysqli_error($link);