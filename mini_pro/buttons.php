<html>
<head>
<meta charset="UTF-8">
<script src="buttons.js"> </script>
<title> OPTIONS </title>
</head>
<style>
body{
margin-right:100px;
margin-left:100px;
border:2px solid;
padding:50px;
box-shadow:10px 10px 5px #aaaaaa;
}
.button {
  background-color:#4CAF50;
  border:bold;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
  width:450px;
  padding:10px;
border-radius: 12px;
}

.button:hover {
  background-color: #3e8e41;
}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
<body style="padding:top 200px;text-align:center;background-color:rgb(58,58,58);
background:linear-gradient(90deg,#1b1b1b,#222,#1b1b1b);color:white;">

<h1 style="font-family:Arial, Helvetica, sans-serif;"> STUDENT RECORD </h1>
<div class="btn-group">
   <button  class="button" onclick="return mylink1()"> DATABASE </button><br>
   <button  class="button" onclick="return mylink2()" > ADD MARKS </button><br>
   <a href="modi.html">
		<div><button class="button"> MODIFY MARKS</button></div></a>
    <button  class="button" onclick="return mylink3()"> TERM TEST AVERAGE</button><br>
    <button  class="button" onclick="return mylink4()"> QUIZ AVERAGE</button><br>
    <button  class="button" onclick="return mylink5()"> ASSIGNMENT AVERAGE</button><br>
    <button  class="button" onclick="return mylink6()"> EXPERIMENT AVERAGE</button><br>

  
</div>


</body>
</html>