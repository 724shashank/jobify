<?php include('unav.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Uploaded-Video</title>
</head>
<body>

    
<div style="background-color:none;width:100%;height:500px;overflow-y: scroll;margin-top:50px;">
<?php

	$con=mysqli_connect("127.0.0.1","root","","job_portal");
	$q="select * from videos order by vtitle";
	$res=mysqli_query($con,$q);
	
	while($row=mysqli_fetch_array($res))
	{

	$vtitle=$row[1];
	$vdisc=$row[2];
	$vidi=$row[3];
echo"<div style='background-color:#FF9900;width:1200px;height:400px;margin-top:50px;margin-left:150px;'>";
echo"<div style='width:700px;height:400px;background-color:white;float: left'>";
	
echo"<table border='1' style='float:left;width:700px;height:400px;font-family:Arial Black;font-size:20pt;'>

<tr><td style='background-color:#333;color:white;'>Title</td><td>".$vtitle."</td></tr>
<tr><td style='background-color:#333;color:white;'>Discription</td><td>".$vdisc."</td></tr>
</table>";
echo"</div>";

 
   echo" <div style='width:500px;height:300px;background-color:none;float:left;margin-top:50px;'>";
    	
echo"<video width='500' height='295' controls>
  <source src='".$vidi."' type='video/mp4'></video>";



    echo"</div></div>";
}
 ?>
</div>
<div class="footer" style="margin-top:15px;"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>