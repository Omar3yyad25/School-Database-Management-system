<?php 

include 'db_connection.php';
if (isset($_POST['Checkdone']) ){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $done= validate($_POST['Checkdone']);
    $tra= validate($_POST['trans']);

    
    $sql = "UPDATE salary SET Claimed = 'Y' WHERE Transaction = '$tra' ";
    
    if (isset($_POST['Checkdone'])){
    	
    	$res = $conn->prepare($sql);
     	if (!$res->execute()){
         echo json_encode($res->errorInfo());
     }
    }
    
    
 }