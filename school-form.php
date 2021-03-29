<?php 
    require("dbConnect.php");
    $sql = " SELECT * FROM  school ";
    $result = $conn->query($sql);
?>
<!DOCTYPE HTML>
<html> 
<body>
<form action="school-manage.php" method="post">
<input type="hidden" name="manage_function" value="new-record">
   SID: <input type="text" name="sSID"><br>
   Name: <input type="text" name="nName"><br>
   TelNo: <input type="text" name=" tTelNo">
   </SELECT> <br>
   <input type="submit">
</form>
    <a href="school-view.php">
        <button class="w3-button w3-yellow">Yellow</button></a>
    <table id="table_show">

</body>
</html>
