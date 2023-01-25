<?php
include 'db_connection.php';
if (isset($_POST['staffID']) ){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $code= validate($_POST['staffID']);
    $amount= validate($_POST['amount']);
    $date= validate ($_POST['release']);

    $sql = "INSERT INTO salary (staff_id ,Amount , Datee) VALUES ('$code','$amount', '$date')";
    $res = $conn->prepare($sql);
     if (!$res->execute()){
         echo json_encode($res->errorInfo());
     }
     

 }