<?php
include 'db_connection.php';
if (isset($_POST['student'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id= validate($_POST['student']);
    $amount= validate($_POST['Amount']);
    $Ddate= validate($_POST['Deadline']);

    $sql2 = "SELECT First_name from student WHERE ID = '$id'";
    $result = $conn->query($sql2);
    $result = $result->fetch();
    $sql = "INSERT INTO tuition_fees (`Student_ID`, `student_name`,`amount`,`datee`) VALUES ('$id', '$result[0]', '$amount','$Ddate')";
    $res = $conn->prepare($sql);
    if (!$res->execute()){
        echo json_encode($res->errorInfo());
    }
}