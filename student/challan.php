
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	
		
<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */


/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 30%;font-size:16px; }
table.meta td { width: 70%;font-size:16px; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */


/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 10; }
	body { box-shadow: none; margin: 10px; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
</style>
		
	</head>
	<body>
	
	
	
	
<?php
ob_start();	
include ('../connect.php');

	$fee_id = $_GET['fee_id'];
	$usn= $_GET['usn'];
$result = $dbc->query("SELECT s.usn,s.name,s.phone,s.gender,s.branch_id,f.seat_type,f.amount,fs.status,ss.sem from student s,fee f,fee_status fs,semsec ss  where s.usn=fs.usn and f.fee_id=fs.fee_id and s.ssid=ss.ssid and fs.usn='$usn' and fs.fee_id='$fee_id'"); 
while($row = $result->fetch_assoc()){ 
	
	
	
	?>
		
	<div class="container-fluid border p-2">
	<div>
		<img class="float-left" alt="" src="../images/ait.png" height=100px; width=100px;/>
			<h3 class="text-center">DR AMBEDKAR INSTITUTE OF TECHNOLOGY</h3>
			<h5 class="text-center"> Near Jnana Bharathi Campus,Bangalore 560-056 </h5>
	</div>
	<br>	
	<div>
		
			<h4 class="text-center text-danger">FEE CHALLAN</h4>
			
				
			
			<table class="meta">
				<tr>
					<th><span class="text-dark">NAME </span></th>
					<td><b><span class="text-dark"><?php echo $row['name'] ;?></span></b></td>
				</tr>
				<div><p class="float-right text-dark" style="margin-right:50px;">Date : <b><?php echo date("d-m-Y");?></b></p><br></div>
				<tr>
					<th><span class="text-dark">USN </span></th>
					<td><b><span class="text-dark"><?php echo $row['usn'] ;?></span></b></td>
				
				</tr>
				
				
				<tr>
					<th><span class="text-dark">BRANCH </span></th>
					<td><b><span class="text-dark"><?php echo $row['branch_id'] ;?></span></b></td>
				</tr>
				<tr>
					<th><span class="text-dark">SEM </span></th>
					<td><b><span class="text-dark"><?php echo $row['sem'] ;?></span></b></td>
				</tr>
				<tr>
					<th><span class="text-dark">REC NO </span></th>
					<td><b><span class="text-dark"><?php echo(rand(10000,20000));?>/20-21</span></b></td>
				</tr>
				
			</table>
			</div>
		
		
			<table class="inventory">
				<thead>
					<tr>
						<th width=50px;><span class="text-dark">Sl No.</span></th>
						<th><span class="text-dark">Particulars</span></th>
						<th width=250px;><span class="text-dark" >Amount</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
					
					<td><b><span class="text-dark">1</span></b></td>
					<td><b><span class="text-dark"><?php echo $row['seat_type'] ;?> FEE</span></b></td>
					
					<td><b><span class="text-dark">₹&nbsp;<?php echo $row['amount'] ;?></span></b></td>
						
					</tr>
					
				</tbody>
			</table>
			<br>
			<br>
			<table class="balance">
				<tr>
					<th><span class="text-dark">Total</span></th>
					<td><b><span class="text-dark">₹&nbsp;<?php echo $row['amount'] ;?></span></b></td>
				</tr>
				<tr>
					<th><span class="text-dark" >Status</span></th>
					<td><b><span class="text-dark"><?php echo $row['status'] ;?></span></b></td>
				</tr>
				<tr>
					<th><span class="text-dark" >Due Date</span></th>
					<td><b><span class="text-dark">30-06-2021</span></b></td>
				</tr>
			</table>
			<br>
			<br>
			<br>
	<hr>
		<aside>
			<h6 class="text-center text-dark"><span >Contact us</span></h6>
			<div >
				<p class="text-dark" align="center">Email : principal@drait.edu.in || Web : www.drait.edu.in || Phone : 080 23211231 </p>
			</div>
		</aside>
	 


</div>

<?php 
}
ob_end_flush();

?>
</body>
</html>