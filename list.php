<form action="adddb.php" method="post">
姓名:<input type="text" name = "sName" value="" placeholder="請輸入姓名"><br/>
學號:<input type="text" name = "sSNumber" value="" required placeholder="請輸入學號" require></br>
Email:<input type="email" name="sEmail" value=""><br/>
年級:<input type="radio" name="sGrade" value="one">一
<input type="radio" name="sGrade" value="two" checked>二
<input type="radio" name="sGrade" value="three">三
<input type="radio" name="sGrade" value="four">四<br/>
<br/>
最喜歡的顏色:<input type="color" name="sColor" value=""><br/>
生日:<input type="date" name="sDate" vaxlue="">
選擇喜歡的數字:<input type="number" name="sNumber" value=""><br/>
你的腦容量:<input type="range"><br/>
<br/>
你的意見:</br>
<textarea name="sText" value="" rows="10" cols = "50">
</textarea>
</br>
</br>
<input type="submit">
<input type="reset">
</form>
