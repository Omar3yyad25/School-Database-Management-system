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
    $trans= validate($_POST['Transaction']);
   
    $sql = "UPDATE salary SET reward = '$amount' WHERE staff_id = '$code' AND Transaction ='$trans'";
    $res = $conn->prepare($sql);
     if (!$res->execute()){
         echo json_encode($res->errorInfo());
     }

     }