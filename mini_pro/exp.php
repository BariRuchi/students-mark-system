<?php 
    session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "miniproject";

    $conn = mysqli_connect($servername,$username,$password,$database);
    $table = $_SESSION["SUBS"];
?>
<?php 
        $sql1 = "select AVG(EX1) as q1 from $table";
        $result1 = mysqli_query($conn,$sql1);
        while($rows=mysqli_fetch_assoc($result1))
            {
            $E1 = round($rows['q1']);
            }

        $sql2 = "select AVG(EX2) as q2 from $table";
        $result2 = mysqli_query($conn,$sql2);
        while($rows=mysqli_fetch_assoc($result2))
        {
             $E2 = round($rows['q2']);
        }

        $sql3 = "select AVG(EX3) as q3 from $table";
        $result3 = mysqli_query($conn,$sql3);
        while($rows=mysqli_fetch_assoc($result3))
            {
            $E3 = round($rows['q3']);
            }

        $sql4 = "select AVG(EX4) as q4 from $table";
        $result4 = mysqli_query($conn,$sql4);
        while($rows=mysqli_fetch_assoc($result4))
         {
         $E4 = round($rows['q4']);
        }

        $sql5 = "select AVG(EX5) as q5 from $table";
        $result5 = mysqli_query($conn,$sql5);
        while($rows=mysqli_fetch_assoc($result5))
            {
            $E5 = round($rows['q5']);
            }

        $sql6 = "select AVG(EX6) as q6 from $table";
        $result6 = mysqli_query($conn,$sql6);
        while($rows=mysqli_fetch_assoc($result6))
            {
            $E6 = round($rows['q6']);
            }

        $sql7 = "select AVG(EX7) as q7 from $table";
        $result7 = mysqli_query($conn,$sql7);
        while($rows=mysqli_fetch_assoc($result7))
             {
                $E7 = round($rows['q7']);
            }

        $sql8 = "select AVG(EX8) as q8 from $table";
        $result8 = mysqli_query($conn,$sql8);
        while($rows=mysqli_fetch_assoc($result8))
        {
            $E8 = round($rows['q8']);
        }

        $sql9 = "select AVG(EX9) as q9 from $table";
        $result9 = mysqli_query($conn,$sql9);
        while($rows=mysqli_fetch_assoc($result9))
        {
            $E9 = round($rows['q9']);
        }

        $sql10 = "select AVG(EX10) as q10 from $table";
        $result10 = mysqli_query($conn,$sql10);
        while($rows=mysqli_fetch_assoc($result10))
        {
            $E10 = round($rows['q10']);
        }

        $sql11 = "select AVG(EX11) as q11 from $table";
        $result11 = mysqli_query($conn,$sql11);
        while($rows=mysqli_fetch_assoc($result11))
        {
            $E11 = round($rows['q11']);
        }

        $sql12 = "select AVG(EX12) as q12 from $table";
        $result12 = mysqli_query($conn,$sql12);
        while($rows=mysqli_fetch_assoc($result12))
        {
            $E12 = round($rows['q12']);
        }

        $sql13 = "select AVG(EX13) as q13 from $table";
        $result13 = mysqli_query($conn,$sql13);
        while($rows=mysqli_fetch_assoc($result13))
        {
            $E13 = round($rows['q13']);
        }

        $sql14 = "select AVG(EX14) as q14 from $table";
        $result14 = mysqli_query($conn,$sql14);
        while($rows=mysqli_fetch_assoc($result14))
        {
            $E14 = round($rows['q14']);
        }

        $sql15 = "select AVG(EX15) as q15 from $table";
        $result15 = mysqli_query($conn,$sql15);
        while($rows=mysqli_fetch_assoc($result15))
        {
            $E15 = round($rows['q15']);
        }

        $sql16 = "select AVG(EX16) as q16 from $table";
        $result16 = mysqli_query($conn,$sql16);
        while($rows=mysqli_fetch_assoc($result16))
        {
            $E16 = round($rows['q16']);
        }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bar Chart</title>
        <link rel="stylesheet" href="exp.css">
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" charset="utf-8"></script>
        </head>
        <body>

            <!--chart start-->
            <div class="chart">
                <ul class="numbers">
                    <li><span>100%</span></li>
                    <li><span>50%</span></li>
                    <li><span>0%</span></li>
                </ul>
                <ul class="bars">
                    <li><div class="bar" data-percentage=<?php echo 10*"$E1"; ?>></div><span>EX 01</span></li> 
                    <li><div class="bar" data-percentage=<?php echo 10*"$E2"; ?>></div><span>EX 02</span></li>
                    <li><div class="bar" data-percentage=<?php echo 10*"$E3"; ?>></div><span>EX 03</span></li>
                    <li><div class="bar" data-percentage=<?php echo 10*"$E4"; ?>></div><span>EX 04</span></li>
                    <li><div class="bar" data-percentage=<?php echo 10*"$E5"; ?>></div><span>EX 05</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E6"; ?>></div><span>EX 06</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E7"; ?>></div><span>EX 07</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E8"; ?>></div><span>EX 08</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E9"; ?>></div><span>EX 09</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E10"; ?>></div><span>EX 10</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E11"; ?>></div><span>EX 11</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E12"; ?>></div><span>EX 12</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E13"; ?>></div><span>EX 13</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E14"; ?>></div><span>EX 14</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E15"; ?>></div><span>EX 15</span></li>
					<li><div class="bar" data-percentage=<?php echo 10*"$E16"; ?>></div><span>EX 16</span></li>
                </ul>
            </div>
            <!--chart end-->

            <script type="text/javascript">
            $(function(){
                $('.bars li .bar').each(function(key,bar){
                    var percentage = $(this).data('percentage');
                    $(this).animate({
                        'height' : percentage + '%'

                    },1000);
                });
            });
            
            </script>
            
            

        </body>
</html>