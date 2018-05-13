<meta charset="utf-8">
<?php
require_once ("db_config.php");
$id=$_GET["id"];
$query_string="delete from stuinfo where id='$id'";
mysqli_query($link,$query_string);
header("location:mysql_page_1.php");