<?php 
include 'Teacher-Portal.php';
include 'db_connection.php';

$uname = $_SESSION['Username'];
$pieces = preg_split('/(?=[A-Z])/',$uname);

if (isset($_POST['Tasknumber']) ){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $done= validate($_POST['Checkdone']);
    $taskno= validate($_POST['Tasknumber']);

    
    $sql = "UPDATE tasks SET Done = 'Yes' WHERE Task_number= $taskno ";
    
    if (isset($_POST['Checkdone'])){
    	
    	$res = $conn->prepare($sql);
     	if (!$res->execute()){
         echo json_encode($res->errorInfo());
     }
    }
    
    
 }