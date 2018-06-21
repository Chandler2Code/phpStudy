<meta charset="utf-8">
<?php
require_once("acl_1.php");
$resource = "p_1.php";
if (isset($_GET['role'])) {
	$role = $_GET['role'];
	if (isset($acl[$role])) {
		if (in_array($resource,$acl[$role])) {
			echo "欢迎光临";
		} 
		else {
			echo "无权访问";
		}
	} 
	else {
		echo "无权访问";
	}
} else {
	echo "无权访问";
}
?>