<meta charset="utf-8">
<?php
require_once ("db_config.php");
//1.firstIndex=0;//起始页
$firstIndex=0;
//2.pageSize=5;//每页的数量
$pageSize=5;
//3.起始页
$currentPage=1;
//4.总记录数
$query_string_totalCount="select count(*) counter from stuinfo";
$totalCountSql=mysqli_query($link,$query_string_totalCount);
$row=mysqli_fetch_assoc($totalCountSql);
$totalCount=$row['counter'];
//echo $totalCount;
//5.总页数
$totalPageCount=floor((($totalCount+$pageSize)-1)/$pageSize);

if(isset($_GET['currentPage'])){
    $currentPage=$_GET["currentPage"];
    if($currentPage<=1){
        $currentPage=$currentPage+1;
    }
    if($currentPage>=$totalPageCount){
        $currentPage=$currentPage-1;
    }
    $firstIndex = $pageSize*($currentPage-1);//计算起始计数位置
}
$query_string="select * from stuinfo limit $firstIndex,$pageSize";
$rs=mysqli_query($link,$query_string);
echo"<table border=1>";
echo "<tr><td>学号</td><td>姓名</td><td>成绩</td><td colspan=2>操作</td></tr>";
while($row=mysqli_fetch_assoc($rs)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["score"]."</td>";
    echo "<td><a href='mysql_edit_3.php?id=".$row["id"]."'>编辑</a></td>";
    echo "<td><a href='mysql_delete_1.php?id=".$row["id"]."'>删除</td>";
    echo "</tr>";
}
echo "<td>
<a href='mysql_page_1.php?currentPage=1' colspan=4>首页</a>
<a href='mysql_page_1.php?currentPage=".($currentPage-1)."' colspan=4>上一页</a>
<a href='mysql_page_1.php?currentPage=".($currentPage+1)."' colspan=4>下一页</a>
<a href='mysql_page_1.php?currentPage=".$totalPageCount."' colspan=4>尾页</a>
</td>";
echo "</table>";