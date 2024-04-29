<?php


$link = mysqli_connect('localhost','root','','form');

if(!$link){
    die("失敗");
}
else{
    echo "成功";
}

$sql = "SELECT * FROM list";

$result = mysqli_query($link,$sql);

echo "<table border = '1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row["No"]."</td><td>".$row["sSNumber"]."</td><td>".$row["sName"]."</td><td>".$row["sEmail"]."</td><td>".$row["sGrade"]."</td><td>".$row["sColor"]."</td><td>".$row["sDate"]."</td><td>".$row["sNumber"]."</td><td>".$row["sText"]."</td><td><a href = 'del.php?No=".$row["No"]."'>刪除</a>"."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>