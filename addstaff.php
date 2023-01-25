<?php
include 'db_connection.php';

if (isset($_POST['Firstname']) &&isset( $_POST['Lastname']) ){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $first= validate($_POST['Firstname']);
    $last= validate($_POST['Lastname']);
    $email= validate($_POST['Email']);
    $role = validate($_POST['role']);
    $dep = validate($_POST['Department']);
    $birth = validate($_POST['birthdate']);

    $firstsql = "INSERT INTO authentication_profile_system(Username, Password, Role) VALUES ('$first$last', '1234', '$role')";



    $result1 = $conn->prepare($firstsql);
    if (!$result1->execute()){

        echo json_encode($result1->errorInfo());
    }

    $getIDsql = "SELECT * FROM authentication_profile_system WHERE Username = '$first$last'";
    $result8 = $conn->query($getIDsql);
    $result8 = $result8->fetch();
    //echo json_encode($result3);
    $idd = $result8['ID'];
    $secondsql = "INSERT INTO staff (staff_id,role, Firstname, Lastname) VALUES ('$idd','$role','$first','$last')";
    $result2 = $conn->prepare($secondsql);
    
    if (!$result2->execute()){
    	//echo "Omar";
        echo json_encode($result2->errorInfo());
    }


    if ($_POST['role']==="teacher"){
    	if ($_POST['Department']=== "Arabic"){
    		$dep = '1';
    	}
    	elseif ($_POST['Department']=== "English"){
    		$dep = '2';
    	}
    	elseif ($_POST['Department']=== "Algebra" || $_POST['Department']=== "Geometry"){
    		$dep = '3';
    	}
    	elseif ($_POST['Department']=== "Science"){
    		$dep = '4';
    	}
    	elseif ($_POST['Department']=== "Social studies"){
    		$dep = '5';
    	}
    	echo $dep;
 
    	$thirdsql = "INSERT INTO `teacher` (`Email`,`First_Name`, `Last_Name`,`Teacher_ID`, `D_Code`, `Birth_date`) VALUES ('$email', '$first', '$last', '$idd', '$dep', '$birth')";	
    	$result3 = $conn->prepare($thirdsql);
    
    	if (!$result3->execute()){
        	echo json_encode($result3->errorInfo());
    	}
    }
    elseif ($_POST['role']==="finance"){
    	$fourthsql = "INSERT INTO `finance_officer` (`Email`,`First_Name`, `Last_Name`, `ID`,`Birth_date`) VALUES ('$email', '$first', '$last','$idd' ,'$birth')";	
    	$result4 = $conn->prepare($fourthsql);
    
    	if (!$result4->execute()){
        	echo json_encode($result4->errorInfo());
    	}
    }
    elseif ($_POST['role']==="admission"){
    	$fifthsql = "INSERT INTO `admission_officer` (`Email`,`First_Name`, `Last_Name`,`ID`,`Birthdate`) VALUES ('$email', '$first', '$last', '$idd','$birth')";	
    	$result5 = $conn->prepare($fifthsql);
    
    	if (!$result5->execute()){
        	echo json_encode($result5->errorInfo());
    	}
    }
    elseif ($_POST['role']==="janitors"){
    	$sixthsql = "INSERT INTO `janitors` (`Email`,`First_Name`, `Last_Name`,`$ID`, `Birthdate`) VALUES ('$email', '$first', '$last', '$idd','$birth')";	
    	$result6 = $conn->prepare($sixthsql);
    
    	if (!$result6->execute()){
        	echo json_encode($result6->errorInfo());
    	}
    }
    if (isset($_POST['submit'])){
    header ("Location: Admin-portal.php?new_staff_with_id_:_$idd");
 }   
}
