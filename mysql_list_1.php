<meta charset="utf-8">
<?php
require_once ("db_config.php");
$rs=mysqli_query($link,"select * from stuinfo");
echo"<table border=1>";
echo "<tr><td>学号</td><td>姓名</td><td>成绩</td><td>操作</td></tr>";
while($row=mysqli_fetch_assoc($rs)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["score"]."</td>";
    echo "<td>编辑|删除</td>";
    echo"</tr>";
}


echo "</table>";