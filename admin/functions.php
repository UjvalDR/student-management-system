 <?php
 function getBranch($dbc){
    $result = @mysqli_query($dbc, "select branch_id, branch_name from branch"); 
     echo '<select name="branch" class="custom-select">';
    if($result){
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            if($row["branch_id"]==$branch_id){
                echo '<option value="'.$row["branch_id"].'" selected="selected">'.$row["branch_name"].' - '.$row["branch_id"].'</option>';
            }else{
                 echo '<option value="'.$row["branch_id"].'">'.$row["branch_name"].' - '.$row["branch_id"].'</option>';
            }
        }
    }
    echo '</select>';   
}

 function getTeacher($dbc){
    $result = @mysqli_query($dbc, "select teacher_id, t_name from teacher"); 
     echo '<select name="teacher" class="custom-select">';
    if($result){
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            if($row["teacher_id"]==$teacher_id){
                echo '<option value="'.$row["teacher_id"].'" selected="selected">'.$row["t_name"].' - '.$row["teacher_id"].'</option>';
            }else{
                 echo '<option value="'.$row["teacher_id"].'">'.$row["t_name"].' - '.$row["teacher_id"].'</option>';
            }
        }
    }
    echo '</select>';   
}



?>

 <?php
 
 function getSSID($dbc){
    $result = @mysqli_query($dbc, "select ssid,sem,section  from semsec"); 
     echo '<select name="ssid" class="custom-select">';
    if($result){
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            if($row["ssid"]==$ssid){
                echo '<option value="'.$row["ssid"].'" selected="selected">'.$row["ssid"].'</option>';
            }else{
                 echo '<option value="'.$row["ssid"].'">'.$row["ssid"].'</option>';
            }
        }
    }
    echo '</select>';   
}

function getSSID1($dbc){
    $result = @mysqli_query($dbc, "select ssid,sem,section  from semsec"); 
     echo '<select name="ssid" class="custom-select" onchange="showUser(this.value)">';
    if($result){
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            if($row["ssid"]==$ssid){
                echo '<option value="'.$row["ssid"].'" selected="selected">'.$row["sem"].' sem  - '.$row["section"].' sec'.'</option>';
            }else{
                 echo '<option value="'.$row["ssid"].'">'.$row["sem"].' sem  - '.$row["section"].' sec'.'</option>';
            }
        }
    }
    echo '</select>';   
}

 function getFeeID($dbc){
    $result = @mysqli_query($dbc, "select FEE_ID,seat_type from fee"); 
     echo '<select name="seat" class="custom-select">';
    if($result){
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            if($row["FEE_ID"]==$FEE_ID){
                echo '<option value="'.$row["FEE_ID"].'" selected="selected">'.$row["FEE_ID"].' - '.$row["seat_type"].'</option>';
            }else{
                 echo '<option value="'.$row["FEE_ID"].'">'.$row["FEE_ID"].' - '.$row["seat_type"].'</option>';
            }
        }
    }
    echo '</select>';   
}


function addStudent($dbc,$query){
    $result = @mysqli_query ($dbc, $query); // Run the query.
    if ((mysqli_affected_rows($dbc) == 1) || (mysqli_affected_rows($dbc) == 0)) { 
        echo '<script>
alert("Student Sucessfully Added");
</script>	'	;					
    } else { // If query did not run OK.
        echo '<script>alert("OOPS..!!! Please try again");</script>';		// Public message.
		exit();
       
    }
}

function addSubjects($dbc,$query){
    $result = @mysqli_query ($dbc, $query); // Run the query.
    if ((mysqli_affected_rows($dbc) == 1) || (mysqli_affected_rows($dbc) == 0)) { 
        echo '<script>
alert("Subjects Sucessfully Added");
</script>	'	;					
    } else { // If query did not run OK.
        echo '<script>alert("OOPS..!!! Please try again");</script>';		// Public message.
		exit();
       
    }
}

function addperformance($dbc,$query){
    $result = @mysqli_query ($dbc, $query); // Run the query.
    if ((mysqli_affected_rows($dbc) == 1) || (mysqli_affected_rows($dbc) == 0)) { 
        echo '<script>
alert("Performance Sucessfully Added");
</script>	'	;					
    } else { // If query did not run OK.
        echo '<script>alert("OOPS..!!! Please try again");</script>';		// Public message.
		exit();
       
    }
}

function addTeacher($dbc,$query){
    $result = @mysqli_query ($dbc, $query); // Run the query.
    if ((mysqli_affected_rows($dbc) == 1) || (mysqli_affected_rows($dbc) == 0)) { 
        echo '<script>
alert("Teacher Sucessfully Added");
</script>	'	;					
    } else { // If query did not run OK.
        echo '<script>alert("OOPS..!!! Please try again");</script>';		// Public message.
		exit();
       
    }
}

function addFee($dbc,$query){
    $result = @mysqli_query ($dbc, $query); // Run the query.
    if ((mysqli_affected_rows($dbc) == 1) || (mysqli_affected_rows($dbc) == 0)) { 
        echo '<script>
alert("Fee status updated");
</script>	'	;					
    } else { // If query did not run OK.
        echo '<script>alert("OOPS..!!! Please try again");</script>';		// Public message.
		exit();
       
    }
}

function checkifUSN($USN){
	$pattern = "/1DA[1-2][0-9][A-Z][A-Z][0-5][0-9][0-9]/";
	$x= preg_match($pattern, $USN);
	
	if ($x==1){
		return $USN;
	}
	else{
		echo '<script>alert("please enter a valid USN");</script>';
	}
}


function checkifTid($tid){
	$pattern =  "/T[A-Z][A-Z]E[0-9][0-9][0-9]/";
	$x= preg_match($pattern, $tid);
	
	if ($x==1){
		return $tid;
	}
	else{
		echo '<script>alert("please enter a valid Teacher ID");</script>';
	}
}



function checkifphone($phone){
	$pattern = "/^[0-9]{10}+$/";
	$x= preg_match($pattern, $phone);
	
	if ($x==1){
		return $phone;
	}
	else{
		echo '<script>alert("please enter a valid Phone number");</script>';
	}
}


?>