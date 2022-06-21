<!DOCTYPE html>
<html>
<title> REGISTER </title>
<head>
  <h1> <u>REGISTER PAGE </u></h1>
  <style>
    input[type=text],input[type=password],input[type=email]{
      width: 250px;
      display: inline-block;
      padding: 5px;
    }
    .test{
      margin:5px;
    }
    label{
      width: 250px;
      display: inline-block;
      font-size: 25px;
    }
    input[type=submit] {
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
    }
    input[type=submit]:hover {
      background-color: #45a049;
    }
	
  </style> 
</head>

<body style="text-align:center;background-color:rgb(58,58,58);background:linear-gradient(90deg,#1b1b1b,#222,#1b1b1b);color:white;padding-top:70px;">
  
    <div>
      <p style="color:yellow;">Please fill in to create an account.</p>
      <form method="POST" action="reg.php" onsubmit="return myfunc()">
      <label> Name:</label>
      <input type="text" class="test" placeholder="Enter name" name="UNAME" required>  </input><br>
      <label> Department: </label>
      <input type="text" class="test" placeholder="Select Department" list="department" name="DNAME" required>  </input><br>
      <datalist id="department">
        <option>INFT</option>
        <option>EXTC</option>
        <option>COMPS</option>
        <option>AI</option>
        <option>DS</option>
        <option>INSTRU</option>
        <option>CIVIL</option>
        <option>MECH</option>
      </datalist>
      <label> Subject:</label>
      <input type="text" class="test" placeholder="Enter subject name" name="SUB" required>  </input><br>
      <label> Phone No.:</label>
      <input type="text" class="test" placeholder="Enter Phone No." name="MNO">  </input><br>
      <label> Email:</label>
      <input type="email" class="test"  placeholder="Enter EMail ID" name="EMAIL" required>  </input><br>
      <label> Password:</label>
      <input type="password" class="test" id="pass1" placeholder="Password" required name="PASS">  </input><br>
	  <p style="padding-left:210px;color:red;"> *Must contain at least 8 characters. </p>
	  <input type="checkbox" onclick="log()">Show Password
	  <script>
		function log() {
		var x = document.getElementById("pass1");
		if (x.type === "password") {
		x.type = "text";
		} else {
			x.type = "password";
		}
		}
	  </script>
    </div>
    <input type="submit"  value="SUBMIT"  name="submit">
	<script> function myfunc(){
		var a = document.getElementById("pass1").value;
		
		if(a.length < 8){
			alert("Invalid Password.");
			header('location:signup.php');
		}
	}</script>

</form>

	
</body>
</html>