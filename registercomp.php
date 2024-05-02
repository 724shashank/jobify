<?php include("hnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Companies</title>
	<style type="text/css">
		button
		{
		width:150px;
		height:30px;
		background-color:#FF9900;
		color:black;
		font-family:Arial Black;
		}
	</style>
</head>
<body>


<?php

      $con=mysqli_connect("127.0.0.1","root","","job_portal");
      $q1="select logo,email from regcmp";
      $res=mysqli_query($con,$q1);
    echo'<div style="margin-top:40px;overflow-y:scroll;background-color:#F0FFF0;color:white;;width:100%;height:500px;">';

      while($row=mysqli_fetch_array($res))
      {
        $logo=$row[0];
        $user=$row[1];

     echo"<div style=width:15%;height:150px;background-color:green;float:left;margin:10px;margin-left:60px;margin-bottom:60px;margin-top:20px;>";

      echo"<img src=".$logo." style=width:100%;height:150px;><center><a href=contant.php?id=".$row[1]."><button>Click To View</button></a></center></div>";
    }
	echo"</div>";

 ?>
 <div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
 </body>
</html>