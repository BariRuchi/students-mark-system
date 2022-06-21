<?php
	session_start();

		if(isset($_POST["submit"])){
			if($_SERVER['REQUEST_METHOD']=="POST"){
				$NAME=$_POST['UNAME'];
				$DNAME = $_POST['DNAME'];
				$SUB = $_POST['SUB'];
				$MOB = $_POST['MNO'];
				$EMAIL = $_POST['EMAIL'];
				$PASS = $_POST['PASS'];    
			}
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "miniproject";
			
			$conn =mysqli_connect($servername,$username,$password,$database);

			$c = "select * from faculty where name='$NAME'";
			$p = "select * from faculty where password='$PASS'";
			$result1 = mysqli_query($conn,$c);
			$num1 = mysqli_num_rows($result1);
			$result2 = mysqli_query($conn,$p);
			$num2 = mysqli_num_rows($result2);

			if($num1 == 1){
				echo"Username Already Taken";
			}
			elseif ($num2 == 1) {
				echo"Password Already Taken";
			}
			else{
				$sql1 = "INSERT INTO `faculty` (`NAME`, `DNAME`, `SUBJECT`, `M_NO`, `EMAIL`, `PASSWORD`) VALUES ('$NAME', '$DNAME', '$SUB', '$MOB', '$EMAIL', '$PASS')";
				//$sql = "INSERT INTO `faculty` (`NAME`, `DNAME`, `SUBJECT`, `M_NO`, `EMAIL`, `PASSWORD`) VALUES ('$NAME', '$DNAME', '$SUB', '$MyNO', '$EMAIL', '$PASS')";
				$result1 = mysqli_query($conn,$sql1);

				$sql2 = "CREATE TABLE `$SUB` ( `ROLL_NO` INT(2) NOT NULL , `NAME` VARCHAR(40) NOT NULL , `CO1` INT(2) NOT NULL , `CO2` INT(2) NOT NULL , `CO3` INT(2) NOT NULL , `CO4` INT(2) NOT NULL , `QUIZ1` INT(1) NOT NULL , `QUIZ2` INT(1) NOT NULL , `QUIZ3` INT(1) NOT NULL , `QUIZ4` INT(1) NOT NULL , `ASS1` INT(2) NOT NULL , `ASS2` INT(2) NOT NULL , `ASS3` INT(2) NOT NULL , `ASS4` INT(2) NOT NULL , `EX1` INT(2) NOT NULL , `EX2` INT(2) NOT NULL , `EX3` INT(2) NOT NULL , `EX4` INT(2) NOT NULL , `EX5` INT(2) NOT NULL , `EX6` INT(2) NOT NULL , `EX7` INT(2) NOT NULL , `EX8` INT(2) NOT NULL , `EX9` INT(2) NOT NULL , `EX10` INT(2) NOT NULL , `EX11` INT(2) NOT NULL , `EX12` INT(2) NOT NULL , `EX13` INT(2) NOT NULL , `EX14` INT(2) NOT NULL , `EX15` INT(2) NOT NULL , `EX16` INT(2) NOT NULL , PRIMARY KEY (`ROLL_NO`))";
				$result2 = mysqli_query($conn,$sql2);
				echo"Account created successfully";
				header('location:FinalMarksSystem.php');
			}
		}
	?>