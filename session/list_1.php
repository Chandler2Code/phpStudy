<meta charset="utf-8">
<?php
require_once("db_config.php");
// echo "hello world";
$sql = "select * from  users";
$result = mysqli_query($link,$sql);
// echo $row["name"];
echo "<table border=1>";
echo "<tr><td>姓名</td><td>密码</td></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["name"]."</td><td>".$row["password"]."</td></tr>";
}
echo "<table border=1>";