<?php include("adnav.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Queries</title>
	<style type="text/css">
		.div1
       {
        width:850px;
        height:500px;
        background-color:white; 
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 

       }
	</style>
</head>
<body>
<center><div class="div1" style="overflow-y:auto;">
  
    <center><table style="font-size:20px;text-align:justify;width:850px;font-family:Arial Black;"border=1>
           <tr><td colspan="4" style="text-align:center;font-size:50px;background-color:#FF9900;color:black;height:50px;"><b>**Queries**</b></td></tr>
            <tr style="background-color:#333;color:white;"><td>Username</td><td>Date</td><td>Subject</td><td>Message</td></tr>
            
       
            <?php
            $con=mysqli_connect("127.0.0.1","root","","job_portal");
$sql="select * from askadmin"; 
            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($res))
            {
                echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
            }

            ?>
            </table>
	        </center>
	    	</div>
			</center>
            <div class="footer"> 
  <h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
			</body>
			</html>