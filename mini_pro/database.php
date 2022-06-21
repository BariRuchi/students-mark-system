<?php 
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$database="miniproject";

	$data = $_SESSION["SUBS"];
	$conn = mysqli_connect($servername,$username,$password,$database);
	$sql = "select * FROM $data ORDER BY ROLL_NO";
	$result = mysqli_query($conn,$sql);
	
?>
	<html>
	<title> DATABASE </title>
	<style>
	body{
    text-align:center;
	background-color:rgb(58,58,58);
	padding:33px;
	color:white;

	}
	table{
    text-shadow : 5px;
    display: inline-block;
	background-color:white;
	color:black;

	}
	input[type=button] {
	width: 10%;
	background-color: #4CAF50;
	color: white;
	font-size: 20px;
	font-family: Impact,sans-serif;
	padding: 10px;
	margin: 8px 0;
	border: bold;
	border-radius: 4px;
	cursor: pointer;
	display:inline-block;
	justify-content: center;
	}
	input[type=button]:hover {
	background-color: #45a049;
	}
	</style>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="buttons.js"> </script>
	</head>
	<body>
		<h2>NAME OF STUDENTS WHO ENTERED THEIR MARKS</h2>
		<table align="center" border="8px">
			<t>
				<th colspan="13" >  ROLL NO.  </th>
				<th colspan="13"> STUDENT NAME </th>
			</t>
		<?php 
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
			<tr>
			<th colspan="13"><?php echo $rows['ROLL_NO']; ?></td>
			<th colspan="13"><?php echo $rows['NAME']; ?></td>
			</tr>
		<?php
			}
		?>
		</table>
		<a href="modi.html">
		<div>
		<input type="button"  value="MODIFY">
		</div></a>
	</form>
	</body>
	</html>