<?php
require_once("db_config.php");
$create_table = "create table user_170(user_name char(50),address char(50),password char(50))ENGINE=MyISAM DEFAULT CHARSET=utf8";
mysqli_query($link,$create_table);
$insert_into_1="insert into user_170(user_name,address,password)values('mike','shanghai','c4ca4238a0b923820dcc509a6f75849b')";
mysqli_query($link,$insert_into_1);
$insert_into_2="insert into user_170(user_name,address,password)values('rose','beijing','c4ca4238a0b923820dcc509a6f75849b')";
mysqli_query($link,$insert_into_2);
echo mysqli_error($link);
