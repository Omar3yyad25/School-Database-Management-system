<?php
include 'db_connection.php';

if (isset($_POST['Firstname']) &&isset( $_POST['Lastname']) ){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $first= validate($_POST['Firstname']);
    $last= validate($_POST['Lastname']);
    $level= validate($_POST['Level']);
    $email= validate($_POST['Email']);
    $gen= validate($_POST['Gender']);
    $birth= validate($_POST['Birthdate']);
    $parent = validate($_POST['PID']);
    $section = validate($_POST['section']);


    $firstsql = "INSERT INTO authentication_profile_system(Username, Password, Role) VALUES ('$first$last', '1234','student')";
   
   
    
    $result1 = $conn->prepare($firstsql);

   

    if (!$result1->execute()){

        echo json_encode($result1->errorInfo());
    }
   
    $getIDsql = "SELECT * FROM authentication_profile_system WHERE Username = '$first$last'";
    $result3 = $conn->query($getIDsql);
    $result3 = $result3->fetch();
    //echo json_encode($result3);
    $idd = $result3['ID'];
    $secondsql = "INSERT INTO `student` (`Gender`, `Email`, `Level`, `Birth_date`, `ID`, `First_Name`, `Last_Name`, `Parent_Code` , `Section`) VALUES ('$gen', '$email', '$level', '$birth', '$idd', '$first', '$last','$parent', '$section')";
    $result2 = $conn->prepare($secondsql);
    if (!$result2->execute()){
        echo json_encode($result2->errorInfo());
    }
}
