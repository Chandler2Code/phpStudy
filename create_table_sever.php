<?php
require_once("db_config1.php");
mysqli_query($link,"create table user_70(name char(50),address char(50),password char(50))ENGINE=MyISAM DEFAULT CHARSET=utf8");
mysqli_query($link,"insert into user_70(name,address,password)values('mike','shanghai','c4ca4238a0b923820dcc509a6f75849b')");
mysqli_query($link,"insert into user_70(name,address,password)values('rose','beijing','c4ca4238a0b923820dcc509a6f75849b')");
echo mysqli_error($link);
