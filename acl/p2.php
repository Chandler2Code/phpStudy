<meta charset="utf-8">
<?php
require_once("acl_1.php");
$resource = "p2.php";
if (isset($_GET['role'])) {
	$role = $_GET['role'];
	//判断类型
	if (isset($acl[$role])) {
		if (in_array($resource,$acl[$role])) {
			echo "欢迎领导访问".$role;
		} else {
			echo "访问过低，请联系管理员";
		}
	} else {
		echo "没有访问权限，请联系管理员";
	}
} else {
	echo "无权访问";
}
?>