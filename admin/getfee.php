<?php
include ('../connect.php');

$usn=$_GET['q'];

$sql="SELECT s.fee_id,f.seat_type,f.amount FROM student s, fee f WHERE s.fee_id=f.fee_id and usn = '$usn' ";
$result = mysqli_query($dbc,$sql);


while($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row["fee_id"].'">'.$row["fee_id"].'  -  '.$row["seat_type"].'  -  ₹ '.$row[amount].'</option>';
}

?>

