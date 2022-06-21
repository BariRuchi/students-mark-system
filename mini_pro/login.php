<?php 
    session_start();
    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "miniproject";
			
    $conn =mysqli_connect($servername,$username,$password,$database);
    
    $NAME = $_POST["UNAME"];
    $PASS = $_POST["PASSWORD"];
     
    $S = "select * from faculty where NAME= '$NAME' AND PASSWORD = '$PASS'";
    $result = mysqli_query($conn , $S);
    $num = mysqli_num_rows($result);
	while($row=mysqli_fetch_assoc($result))
			{
			$sub = $row['SUBJECT'];
        }
    $_SESSION["SUBS"] = $sub;
    if($num == 1){
        echo"<script>alert('WELCOME $NAME');
        window.location = 'buttons.php';
        </script>";
        
        exit;
    }
    else {
        header('location:FinalMarksSystem.php');
        exit;
    }

?>