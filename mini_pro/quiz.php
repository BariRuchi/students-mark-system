<?php 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "miniproject";

	$conn = mysqli_connect($servername,$username,$password,$database);
	$table = $_SESSION["SUBS"];
	?>

<!doctype html5>
<html>
<style>
svg{
	position:relative;
	width: 150px;
	height:150px;
	z-index:1000;
}
body{
	display: flex;
	justify-content:center;
	align-items:center;
	min-height:100vh;
	background: #101010;
}
.container{
	position: relative;
	width: 1200px;
	display: flex;
	justify-content:space-around;
}
.container .card{
	position:relative;
	width:250px;
	background: linear-gradient(90deg,#1b1b1b,#222,#1b1b1b);
	height:300px;
	align-items:center;
	display:flex;
	justify-content:center;
	border-radius: 4px;
	text-align:center;
	color: white;
	overflow:hidden;
	transition:0.5s;
}

.percent{
	position:relative;
	width: 150px;
	height:150px;
	border-radius: 100%;
	box-shadow:inset 0 0 50px #000;
	background: #222
	
}

.percent .number{
	position: absolute;
	left: 0;
	top:0;
	width:100%;
	height:100%;
	display:flex;
	justify-content:center;
	align-items:center;
	border-radius:50%;
	font-size:20px;
}

.card:hover .percent .number h2{
	color: #fff;
	font-size:20px;
	
}
.container .card:hover{
	transform:translatey(-10px);
	box-shadow: 0 15px 35px rgba(0,0,0,.5);
}
svg circle{
	width: 100%;
	height: 150%;
	fill: none;
	stroke: #191919;
	stroke-width:10;
	stroke-Linecap:round;
	transform: translate(5px,5px);	
}

svg circle:nth-child(2){
	stroke-dasharray: 440;
	stroke-dashoffset: 440;
}

.card:nth-child(1) svg circle:nth-child(2)
{
	<?php 
		$sql = "select AVG(QUIZ1) as q1 from $table";
		$result = mysqli_query($conn,$sql);
		while($rows=mysqli_fetch_assoc($result))
			{
			$Q1 = round($rows['q1']);
	?>
	stroke-dashoffset: calc(440 - (440*<?php echo"$Q1"; ?>)/5);
	stroke: #00ff43;
	<?php
		}
	?>
}
.card:nth-child(2) svg circle:nth-child(2)
{
	<?php 
		$sql = "select AVG(QUIZ2) as q2 from $table";
		$result = mysqli_query($conn,$sql);
		while($rows=mysqli_fetch_assoc($result))
			{
			$Q2 = round($rows['q2']);
	?>
	stroke-dashoffset: calc(440 - (440*<?php echo"$Q2"; ?>)/5);
	stroke: white;
	<?php
		}
	?>
}
.card:nth-child(3) svg circle:nth-child(2)
{
	<?php 
		$sql = "select AVG(QUIZ3) as q3 from $table";
		$result = mysqli_query($conn,$sql);
		while($rows=mysqli_fetch_assoc($result))
			{
			$Q3 = round($rows['q3']);
	?>
	stroke-dashoffset: calc(440 - (440*<?php echo"$Q3"; ?>)/5);
	stroke: red;
	<?php
		}
	?>
}
.card:nth-child(4) svg circle:nth-child(2)
{
	<?php 
		$sql = "select AVG(QUIZ4) as q4 from $table";
		$result = mysqli_query($conn,$sql);
		while($rows=mysqli_fetch_assoc($result))
			{
			$Q4 = round($rows['q4']);
	?>
	stroke-dashoffset: calc(440 - (440*<?php echo"$Q4"; ?>)/5);
	stroke: #ff04f7;
	<?php
		}
	?>
}
</style>
<title> QUIZ </title>
<head>
<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
					</svg>
					<div class="number">
						<h2><?php echo 20*"$Q1"; ?><span>%</span></h2>
					</div>
				</div>
				<h2 class="text">Quiz1 <br><?php echo "Average = ".$Q3;?></h2>
			</div>
		</div>
		<div class="card">
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
					</svg>
					<div class="number">
						<h2><?php echo 20*"$Q2"; ?><span>%</span></h2>
					</div>
				</div>
				<h2 class="text">Quiz2 <br><?php echo "Average = ".$Q2;?></h2>
			</div>
		</div>
		<div class="card">
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
					</svg>
					<div class="number">
						<h2><?php echo 20*"$Q3"; ?><span>%</span></h2>
						
					</div>
					
				</div>
				<h2 class="text">Quiz3 <br><?php echo "Average = ".$Q3;?></h2>
			</div>
		</div>
		<div class="card">
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
					</svg>
					<div class="number">
						<h2><?php echo 20*"$Q4"; ?><span>%</span></h2>
					</div>
				</div>
				<h2 class="text">Quiz4 <br><?php echo "Average = ".$Q4;?> </h2>
			</div>
		</div>
	</div>

</body>
</html>