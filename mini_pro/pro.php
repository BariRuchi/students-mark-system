<?php 
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$database="miniproject";

	$conn = mysqli_connect($servername,$username,$password,$database);
	
	$subjects = $_SESSION["SUBS"];

	$NAME = $_POST["SNAME"];
	$RN = $_POST["ROLLN"];
	$CO_1 = $_POST["CO1"];
	$CO_2 = $_POST["CO2"];
	$CO_3 = $_POST["CO3"];
	$CO_4 = $_POST["CO4"];
	$QUIZ_1 = $_POST["QUIZ1"];
	$QUIZ_2 = $_POST["QUIZ2"];
	$QUIZ_3 = $_POST["QUIZ3"];
	$QUIZ_4 = $_POST["QUIZ4"];
	$ASS_1 = $_POST["ASS1"];
	$ASS_2 = $_POST["ASS2"];
	$ASS_3 = $_POST["ASS3"];
	$ASS_4 = $_POST["ASS4"];
	$ex1 = $_POST["E1"];
	$ex2 = $_POST["E2"];
	$ex3 = $_POST["E3"];
	$ex4 = $_POST["E4"];
	$ex5 = $_POST["E5"];
	$ex6 = $_POST["E6"];
	$ex7 = $_POST["E7"];
	$ex8 = $_POST["E8"];
	$ex9 = $_POST["E9"];
	$ex10 = $_POST["E10"];
	$ex11 = $_POST["E11"];
	$ex12 = $_POST["E12"];
	$ex13 = $_POST["E13"];
	$ex14 = $_POST["E14"];
	$ex15 = $_POST["E15"];
	$ex16 = $_POST["E16"];

	
	$sql = " INSERT INTO `$subjects` (`ROLL_NO`, `NAME`, `CO1`, `CO2`, `CO3`, `CO4`, `QUIZ1`, `QUIZ2`, `QUIZ3`, `QUIZ4`, `ASS1`, `ASS2`, `ASS3`, `ASS4`, `EX1`, `EX2`, `EX3`, `EX4`, `EX5`, `EX6`, `EX7`, `EX8`, `EX9`, `EX10`, `EX11`, `EX12`, `EX13`, `EX14`, `EX15`, `EX16`) VALUES ('$RN', '$NAME', '$CO_1', '$CO_2', '$CO_3', '$CO_4', '$QUIZ_1', '$QUIZ_2', '$QUIZ_3', '$QUIZ_4', '$ASS_1', '$ASS_2', '$ASS_3', '$ASS_4', '$ex1', '$ex2', '$ex3', '$ex4', '$ex5', '$ex6', '$ex7', '$ex8', '$ex9', '$ex10', '$ex11', '$ex12', '$ex13', '$ex14', '$ex15', '$ex16')";
	$result = mysqli_query($conn,$sql);
	
	if($result){
		echo"<script>alert('DATA INSERTED SUCCESSFULLY!!!');
		window.location.href = 'pro.html';
		</script>";
		
	}
	
	?>
	