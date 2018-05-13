<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 13:56
 */
require_once("db_config.php");
mysqli_query($link,"drop database student");
mysqli_query($link,"create database student");
mysqli_query($link,"use student");
mysqli_query($link,"create table stuinfo(id CHAR(50),name CHAR (50) ,score INT )engine=myisam DEFAULT charset=utf8");
mysqli_query($link,"insert into stuinfo(id,name,score)VALUES ('001','mike','78')");
mysqli_query($link,"insert into stuinfo(id,name,score)VALUES ('002','mary','88')");
echo mysqli_error($link);

