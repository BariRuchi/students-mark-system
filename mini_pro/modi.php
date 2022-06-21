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

	
	$sql = " UPDATE`$subjects` 
			SET `ROLL_NO`='$RN', 
				`NAME`='$NAME', 
				`CO1`='$CO_1', 
				`CO2`='$CO_2', 
				`CO3`='$CO_3', 
				`CO4`='$CO_4', 
				`QUIZ1`='$QUIZ_1', 
				`QUIZ2`='$QUIZ_2', 
				`QUIZ3`='$QUIZ_3', 
				`QUIZ4`='$QUIZ_4', 
				`ASS1`='$ASS_1', 
				`ASS2`='$ASS_2', 
				`ASS3`='$ASS_3', 
				`ASS4`='$ASS_4', 
				`EX1`='$ex1', 
				`EX2`='$ex2', 
				`EX3`='$ex3', 
				`EX4`='$ex4', 
				`EX5`='$ex5', 
				`EX6`='$ex6', 
				`EX7`='$ex7', 
				`EX8`='$ex8', 
				`EX9`='$ex9', 
				`EX10`='$ex10', 
				`EX11`='$ex11', 
				`EX12`='$ex12', 
				`EX13`='$ex13', 
				`EX14`='$ex14', 
				`EX15`='$ex15', 
				`EX16`='$ex16'
			WHERE `ROLL_NO`=$RN";
	$result = mysqli_query($conn,$sql);
	
	if($result){
		echo"<script>alert('DATA UPDATED SUCCESSFULLY!!!');
		window.location.href = 'buttons.php';
		</script>";
		
	}
	?>

