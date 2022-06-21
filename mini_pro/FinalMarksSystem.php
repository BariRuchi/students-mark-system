<!DOCTYPE html5>
<html lang="en">

<style>
body{
	background-image: url('vcet.jpeg');
	background-repeat: no-repeat;
	background-size: cover;
   	text-align: center;
	
	margin: 5px bold;
	opacity: 0.8;
}
label{
	font-size: 20px;
	font-family: Georgia, 'Times New Roman', Times, serif;
}
.hh{
background:linear-gradient(90deg,#1b1b1b,#222,#837676);
text-shadow : 5px;
margin:5px;
border: 5px,bold;}

div{
	background:linear-gradient(90deg,#1b1b1b,#222,#1b1b1b);
	text-align: center;
	color:white;
	width:400px;
	margin:50px;
	padding: 15px;
    margin: 15px bold;
	border: 50px,bold;
    display: inline-block;
	}

input[type=text],input[type=password]{
	width:250px;
	padding:2px;
	margin-bottom:10px;
	margin-left:5px;
}
input[type=submit]{
	width: 150px;
	margin-top: 5px;
	margin-left:5px;
	cursor: pointer;
	font-family: fantasy;
	font-size: 20px;
}
.clr{
background-color:#4CAF50;
}
.hd{
	font-size: 25px;
	font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
h1{
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	font-size: 45px;
	background-color:rgb(147,147,147);
}

a{
	color:yellow;
	background-color:transparant;
	text-decoration:bold;
	font-family:Verdana;
}
</style>

<head>
    <meta charset="UTF-8">
    <title>LOGIN FORM</title>

</head>
<body>
 <form id = "theform" method="POST" action="login.php">
		<h1>Vidyavardhini's College Of Engineering <br>& Technology</h1>
        <div>
			<h2 class="hh"> LOGIN HERE</h2><br>
			<label> Username:</label>
			<input class="input" id="name" type="text" name="UNAME"><br>
			<label> Password:</label>
			<input class="input" id="pass" type="password" name="PASSWORD"><br>
			<input type="checkbox" onclick="log()">Show Password <br>
			<script>
			function log() {
			var x = document.getElementById("pass");
			if (x.type === "password") {
			x.type = "text";
			} else {
			x.type = "password";
			}
			}</script>
			<input type="submit" value="LOGIN" class="clr" >
			<p>Don't have account?<a href="signup.php">Sign up</a>.</p>
		</div>
    </form>
</body>
</html>
