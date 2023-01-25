<?php 
include 'Teacher-Portal.php';
include 'db_connection.php';

$uname = $_SESSION['Username'];

echo $uname;

function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }


$section = validate($_POST['section']);
$id= validate($_POST['students']);
$grade= validate($_POST['grade']);

$pieces = preg_split('/(?=[A-Z])/',$uname);

$sql8 = "SELECT Dname FROM department WHERE Dno IN (SELECT D_Code FROM teacher WHERE First_Name= '$pieces[1]' AND Last_Name= '$pieces[2]') ";
$result8 = $conn->query($sql8);
$result8 = $result8->fetch();
echo $result8['Dname'];
$subject = $result8['Dname'];

$sqlcheck1 = "SELECT COUNT(studentid) FROM grades WHERE studentid= '$id'";
$result1 = $conn->query($sqlcheck1);
$result1 = $result1->fetch();
echo $result1['COUNT(studentid)'];

$sql2 = "INSERT INTO grades (studentid,$subject) VALUES ('$id' , '$grade')";
$sql = "UPDATE grades SET $subject = '$grade' WHERE studentid = '$id'";
$sqlcheck = "SELECT Section FROM student WHERE Section = '$section' ";
$result = $conn->query($sqlcheck);
$result = $result->fetch();


if ($result['Section'] == $_POST['section'] && $result1['COUNT(studentid)'] == '0'){
    echo "Omar";
    $res2 = $conn->prepare($sql2);
    if (!$res2->execute()){
        echo "Omar";
        echo json_encode($res2->errorInfo());
    }
}
elseif ($result['Section'] == $_POST['section'] && $result1['COUNT(studentid)'] > '0') {
    echo "Ahmed";
    $res = $conn->prepare($sql);
    if (!$res->execute()){

        echo json_encode($res->errorInfo());
    }
}
