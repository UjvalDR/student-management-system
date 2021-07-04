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

function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    if(($d && $d->format('Y-m-d') === $date)){
		return $d;
        
    }else{
		echo '<script>alert("please enter a valid DOB");</script>';
       
    }
}
?>