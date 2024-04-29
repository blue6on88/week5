<?php
$sSNumber = $_POST["sSNumber"];
$sName = $_POST["sName"];
$sEmail = $_POST["sEmail"];
$sGrade = $_POST["sGrade"];
$sColor = $_POST["sColor"];
$sDate = $_POST["sDate"];
$sNumber = $_POST["sNumber"];
$sText = $_POST["sText"];


 
//連結資料庫
$link = mysqli_connect('localhost','root','','form');
if(!$link){
    die("失敗");
}
else{
    echo "成功</br>";
}
//SQL語法
$sql = "INSERT INTO list(sSNumber,sName,sEmail,sGrade,sColor,sDate,sNumber,sText) VALUES('$sSNumber', '$sName','$sEmail','$sGrade','$sColor','$sDate','$sNumber','$sText')";
//送出查詢
if($result = mysqli_query($link,$sql)){
    echo "<br/>新增成功";
}
echo "<br/><a href = 'db.php'>查看資料庫</a>";


mysqli_close($link);
?>