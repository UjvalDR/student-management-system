<?php
include ('../connect.php');

$ssid=$_GET['q'];

$sql="SELECT usn,name FROM student WHERE ssid = '".$ssid."'";
$result = mysqli_query($dbc,$sql);


echo '<option value="-" selected="selected" disabled>select the student</option>';
while($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row["usn"].'">'.$row["usn"].'  -  '.$row["name"].'</option>';
}

?>

