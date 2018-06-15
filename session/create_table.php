<?php
require_once("db_config.php");
mysqli_query($link,"drop database student");
mysqli_query($link,"create database student");
mysqli_query($link,"use student");
mysqli_query($link,"create table users(name char(50),password char(50))ENGINE=MyISAM DEFAULT CHARSET=utf8");
mysqli_query($link,"insert into users(name,password)values('mike','11')");
mysqli_query($link,"insert into users(name,password)values('rose','11')");
$query_string  = "select * from users where name ='mike'";
// echo $query_string;
$rs = mysqli_query($link,$query_string);
$row = mysqli_fetch_assoc($rs);
echo $row["name"];
echo mysqli_error($link);