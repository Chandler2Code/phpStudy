<?php
$link=mysqli_connect("localhost","root","","test") or die("数据库连接失败");
// mysqli_query($link,"set names utf8");
mysqli_query($link,"use student");