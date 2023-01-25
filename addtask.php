<?php
include 'db_connection.php';
if (isset($_POST['taskname'])  ){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $first= validate($_POST['taskname']);
    $code= validate($_POST['staffID']);
    $taskdesrip= validate($_POST['taskdescrip']);

    echo "Omar";
    $sql = "INSERT INTO tasks (`Staff_ID`, `staff_name`,`taskdescrip`) VALUES ('$code','$first','$taskdesrip')";
    $res = $conn->prepare($sql);

    if (!$res->execute()){
        echo json_encode($res->errorInfo());
    }
}
