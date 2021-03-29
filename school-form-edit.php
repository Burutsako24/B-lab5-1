<?php 
    require("dbConnect.php");
    $sid = $_GET["SID"];
    $mnane = ""; $Tel = "";
    $sql = "SELECT * FROM  school where SID='$sid' ";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $mnane = $row["Name"]; 
        $Tel = $row["TelNo"]; 
    }

    $sql = " SELECT * FROM  School ";
    $result = $conn->query($sql);
?>
<!DOCTYPE HTML>
<html> 
<body>
<form action="school-manage.php" method="post">
<input type="hidden" name="manage_function" value="edit-record">
   SID: <input type="text" name="sSID" readonly value="<?=$sid?>"><br>
   Name: <input type="text" name="nName" value="<?=$mnane?>"><br>
   TelNo: <input type="text" name="tTelNo" value="<?=$Tel?>"><br>
   <input type="submit">
</form>
    <a href="major-view.php">
        <button class="w3-button w3-yellow">Yellow</button></a>
    <table id="table_show">

</body>
</html>
