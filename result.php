<?php include("unav.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Result</title>
</head>
<body>
<?php
	$con=mysqli_connect("127.0.0.1","root","","job_portal");
	$query1="select result.edate,result.maximum,result.obtained from result where result.sid='$user'";
	$res1=mysqli_query($con,$query1);
	if($row=mysqli_fetch_array($res1))
	{
	echo "<center>";
	echo"<table width=500 height=500 style='font-size:20px;background-color:white;cell-padding:10px;margin-top:100px;'>"; 
	echo"<tr style='font-size:30px;background-color:#FF9900;color:black;'><th colspan=2><b><u>Test-Result</u></b></th></tr>";
	
	echo"<tr><td><b>Test-Date</b></td><td>$row[0]</td></tr>";
	echo"<tr><td><b>Maximum-Marks</b></td><td>$row[1]</td></tr>";
	echo"<tr><td><b>Marks-Obtained</b></td><td>$row[2]</td></tr>";
    echo"<tr style='background-color:#FF9900;'><td colspan=2></td></tr>";
	echo "</table></center>";
	}
	?>
     
    <div class="footer" style="margin-top:30px;"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>   
</body>
</html>