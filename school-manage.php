<?php 
    require("dbConnect.php");
    //var_dump($_POST);
    //var_dump($_GET);
    $manage_function = $_REQUEST["manage_function"];
    if($manage_function=="new-record"){        
        $sid = $_POST["sSID"];
        $mName = $_POST["nName"];
        $Tel = $_POST["tTelNo"];

        $sql = "INSERT INTO school(SID,Name,TelNo) 
        VALUES ('$sid','$mName','$Tel');";

        $result = $conn->query($sql);
        
        header("location: http://localhost/itd62-276/lab5-1/school-view.php" );
        exit(0);

    }else if($manage_function=="edit-record"){
       
        $sid = $_POST["sSID"];
        $nName = $_POST["nName"];
        $Tel = $_POST["tTelNo"];

        $sql = "UPDATE school SET Name ='$nName',TelNo = '$Tel' WHERE SID = '$sid';";
        
        $result = $conn->query($sql);
        header("location: http://localhost/itd62-276/lab5-1/school-view.php" );
        exit(0);

    }else if($manage_function=="delete-record"){
        $sid = $_GET["SID"];

        $sql = "DELETE from school where sid='$sid';";
        
        $result = $conn->query($sql);
        header("location: http://localhost/itd62-276/lab5-1/school-view.php" );
        exit(0);
    }
?>
