<?php include("adnav.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Verify-Company</title>
	<style type="text/css">
			.div1
       {
        width:1517px;
        height:500px;
        background-color:mistyrose;
        margin-left:0px;
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px;
	</style>
</head>
<body>
<div class="div1"  style="overflow-y:scroll;">
<table border="1px" width="1500" style="font-family:Arial Black;" >
        <tr><td colspan="9" style="text-align: center;background-color:#FF9900;height:50px;font-family:Arial Black;font-size:30pt;">Verify-Company</td></tr>
        <tr style="background-color:#333;color: white;text-align: center;font-size:15pt;">
            <td>Company-Name</td>
            <td>Country</td>
            <td>State</td>
            <td>Pincode</td>
            <td>Phone No.</td>
            <td>Email</td>
            <td>ISO Certification No.</td>
            <td>Current-Status</td>
            <td>Status</td>
         
            
        </tr>

        <?php
        
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$query="select * from regcmp";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
       
        $oname=$row[0];
        $country=$row[3];
        $state=$row[4];
        $pincode=$row[5];
        $phone=$row[6];
        $email=$row[11];
        $iso=$row[7];
        $current=$row[13];


echo"<tr><td>".$oname."</td><td>".$country."</td><td>".$state."</td><td>".$pincode."</td><td>".$phone."</td><td>".$email."</td><td>".$iso."</td><td>".$current."</td>";
if($current == "	Disallowed")
            {
                $str = "Allowed";
            }
            else if($current == "Allowed")
            {
                $str = "Disallowed";
            }
            else
            {
                $str = "Allowed";
            }   
            echo "<td><a style='text-decoration:none;color:blue;' href='compset.php?id=".$email."&stat=".$str."'>".$str."</a></td>";
            echo "</tr>";


            }

            ?>
</table>
</div>
<div class="footer"> 
  <h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>

</body>
</html>