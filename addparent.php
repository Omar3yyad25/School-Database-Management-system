<?php
include 'db_connection.php';
if (isset($_POST['Firstname']) &&isset( $_POST['Lastname'])&& isset($_POST['email']) ){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $first= validate($_POST['Firstname']);
    $last= validate($_POST['Lastname']);
    $email= validate($_POST['email']);

    $firstsql = "INSERT INTO authentication_profile_system(Username, Password, Role) VALUES ('$first$last', '1234', 'parent')";
   
    $result1 = $conn->prepare($firstsql);
    


    if (!$result1->execute()){
        echo json_encode($result1->errorInfo());
    }
    $getIDsql = "SELECT * FROM authentication_profile_system WHERE Username = '$first$last'";
    $result3 = $conn->query($getIDsql);
    $result3 = $result3->fetch();
    //echo json_encode($result3);
    $idd = $result3['ID'];
     $secondsql = "INSERT INTO parent (Parent_code, First_Name, Last_Name , Email) VALUES ('$idd','$first','$last','$email')";
     $result2 = $conn->prepare($secondsql);
    if (!$result2->execute()){
        echo json_encode($result2->errorInfo());
    }
    if (isset($_POST['submit'])){
    header ("Location: Admin-portal.php?new_staff_with_id_:_$idd");
 }   
}