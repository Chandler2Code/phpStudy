<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 13:56
 */
// require_once("db_config.php");
// mysqli_query($link,"drop database student");
// mysqli_query($link,"create database student");
// mysqli_query($link,"use student");
// mysqli_query($link,"create table user(name CHAR(50) ,password CHAR(40) engine=myisam DEFAULT charset=utf8");
// mysqli_query($link,"insert into user(name,password) VALUES ('mike','1')");
// mysqli_query($link,"insert into user(name,password) VALUES ('mary','2')");
// echo mysqli_error($link);

require_once("db_config.php");
mysqli_query($link,"drop database student");
mysqli_query($link,"create database student");
mysqli_query($link,"use student");
mysqli_query($link,"create table user(name char(50),password char(50))ENGINE=MyISAM DEFAULT CHARSET=utf8");
mysqli_query($link,"insert into user(name,password)values('mike','11')");
mysqli_query($link,"insert into user(name,password)values('rose','11')");
echo mysqli_error($link);

