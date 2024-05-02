<?php include("cnav.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Queries</title>
    <style type="text/css">
		.div1
       {
        width:870px;
        height:500px;
        background-color:#FF9900 ; 
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
       }
	</style>
</head>
<body>
<center><div class="div1" style="overflow:scroll">
  
    <table style="font-size:20px;text-align:justify;width:850px;"border=1>
           <tr><td colspan="4" style="text-align:center;font-size:50px;background-color: #4C4A48;color:white;height:100px;"><b>**Queries**</b></td></tr>
            <tr style="background-color:#333;color:white;"><td>Username</td><td>Date</td><td>Name</td><td>Question</td></tr>
            
       
            <?php
            $con=mysqli_connect("127.0.0.1","root","","job_portal");
            $sql="select * from askcomp where cuser='$cuser'"; 
            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($res))
            {
                echo"<tr><td>".$row[0]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";

            }

            ?>
            </table>
	       
	    	</div>
            <div class="footer"> 
           <h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
            </div>
			</center>
			</body>
			</html>