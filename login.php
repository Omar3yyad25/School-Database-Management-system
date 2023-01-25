<?php
session_start();
include './db_connection.php';

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM authentication_profile_system WHERE Username='$uname' AND Password='$pass'";
        $result = $conn->query($sql);
        $result = $result->fetch();
        if ($result) {
            $_SESSION['Username'] = $result['Username']; 
            if ($result['Username'] === $uname && $result['Password'] === $pass && $result['Role'] === "student") {
                header ("Location: Student-portal.php");
                exit();
            }
            elseif ($result['Username'] === $uname && $result['Password'] === $pass && $result['Role'] === "teacher" ){
                header ("Location: Teacher-portal.php");
                exit();
            }
            elseif ($result['Username'] === $uname && $result['Password'] === $pass && $result['Role'] === "parent" ){
                header ("Location: Parent-portal.php");
                exit();
            }
            elseif ($result['Username'] === $uname && $result['Password'] === $pass && $result['Role'] === "admin" ){
                header ("Location: Admin-portal.php");
                exit();
            }
            elseif ($result['Username'] === $uname && $result['Password'] === $pass && $result['Role'] === "finance" ){
                header ("Location: Finance-portal.php");
                exit();
            }
            elseif ($result['Username'] === $uname && $result['Password'] === $pass && $result['Role'] === "admission" ){
                header ("Location: Admission-portal.php");
                exit();
            }
        }else{
            header("Location: login.html?Username or password is incorrect");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}