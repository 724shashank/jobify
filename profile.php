<?php include("unav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<?php
  
  $con=mysqli_connect("127.0.0.1","root","","job_portal");
  $sql="select * from indreg where email='$user' ";
  $res=mysqli_query($con,$sql);

  if($row=mysqli_fetch_array($res))
  {
    $user=$row[0];
    $name=$row[1];
    $state=$row[2];
    $city=$row[3];
    $address=$row[4];
    $dob=$row[5];
    $mobile=$row[6];
    $utype=$row[7];
    $photo=$row[8];
   
    
        echo"<center><table width=600 height=600 style='background-color:white;font-size:20px;margin-top:10px;box-shadow:5px 5px 5px 2px black;font-family:Arial Black'>";
        echo"<tr><td colspan=2 style='text-align:center;font-size:30px;background-color:#FF9900;color:black;'><b>User-Profile</b></td></tr>";
       echo"<tr><td><b>Profile-Picture:</b></td><td><img src='".$row[8]."' style='width:100px;height:99px;display:inline;'border=1></td></tr>"; 
        echo"<tr><td><b>Email/Username:</b></td><td>$user</td></tr>";
        echo"<tr><td><b>Name:</b></td><td>$name</td></tr>";
        echo"<tr><td><b>State:</b></td><td>$state</td></tr>";
        echo"<tr><td><b>City:</b></td><td>$city</td></tr>";
        echo"<tr><td><b>Address:</b></td><td>$address</td></tr>";
        echo"<tr><td><b>Date-or-Birth:</b></td><td>$dob</td></tr>";
        echo"<tr><td><b>Mobile:</b></td><td>$mobile</td></tr>";
        echo"<tr><td><b>User-Type:</b></td><td>$utype</td></tr>";
        echo"</table></center>";  
        }
        ?>
	
</div>
<div class="footer" style="margin-top:30px;"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>