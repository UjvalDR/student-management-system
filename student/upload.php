   
<?php 
include ('../connect.php');
include ('functions.php');
	
	if(isset($_POST['upload'])){
		$target_path = "../stu_assignments/";
		$target_path = $target_path . basename ($_FILES['ass']['name']);
		if(move_uploaded_file($_FILES['ass']['tmp_name'], $target_path))
		{
								
			$ass = basename($_FILES['ass']['name']);
			$usn=$_POST['usn'];
			$ass_no=$_POST['assno'];
			$due=date("Y-m-d h:i:s");
			$qr = "INSERT INTO stu_assingment (usn,sub_time,ass_loc,ass_no) VALUES ('$usn','$due','$ass',$ass_no)";
			$res = $dbc->query($qr);
			if($res === TRUE){
				header('Location: assupload.php?ass_no='.$ass_no.''); 
				echo '<script>alert("Assignment  Sucessfully Added");  </script>	'	;
			}
			else "<script type = \"text/javascript\">alert(\"Failed to submit\");</script>";
			}
			else "<script type = \"text/javascript\">alert(\"Failed to submit\");</script>";
	}
							
							

					?>