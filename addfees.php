<?php
include 'db_connection.php';
 if (isset($_POST['Student'])){

     function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }
     $id= validate($_POST['Student']);
     $code= validate($_POST['paymentcode']);
     $trans= validate($_POST['Transaction']);

   //  echo "Omar";
     $sql = "UPDATE tuition_fees SET Payment_Code ='$code' , Paid = 'Yes' WHERE Student_ID = '$id' AND Transaction = '$trans'";
     $res = $conn->prepare($sql);
     if (!$res->execute()){
         echo json_encode($res->errorInfo());
     }
 }