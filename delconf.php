<?php include('cnav.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		
  	
input 
    {
      width:510px;
      height:50px;
      font-size:20px;
      font-family: Arial Black;

    }
    button
    {
  
     width:250px;
     float: right;
     background-color: #333;
     height: 60px;
     font-family: Arial Black;
     font-size: 15pt;
     color: white;

    }
	</style>
</head>
<body>



<?php
$_SESSION['id']=$_REQUEST['id'];
$id=$_SESSION['id'];
$opr=$_REQUEST['opr'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q="select * from jobs where jid='$id' AND user='$cuser'";
if($opr=='edit')
{
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);

$jtitle=$row[1];
$jloc=$row[2];
$eligi=$row[3];
$sal=$row[4];
$jlast=$row[6];
$jid=$row[7];
$jdis=$row[8];




       echo' <div style="background-color: #FF9900;width:800px;margin-top:50px;height:600px;margin-left:370px;">
  <br><br>
<table style="font-family:Arial Black;font-size:15pt;">

  <tr><td><Form action="update.php"></td></tr>
  <tr><td>Job-Title &nbsp;</td><td><input type="text" name="jtitle" placeholder="Job-Title" value="'.$jtitle.'"></td></tr>
  <tr><td>Job-Location &nbsp;</td><td><input type="text" name="jloc"placeholder="Location" value="'.$jloc.'"></td></tr>
  <tr><td>Eligibility &nbsp;</td><td><input type="text" name="jele" placeholder="Eligibility" value="'.$eligi.'"></td></tr>
  <tr><td>Salary &nbsp;</td><td><input type="text" name="jsal"placeholder="Salary" value="'.$sal.'"></td></tr>
  <tr><td>Last-Date &nbsp;</td><td><input type="text" name="jlast" placeholder="Last-Date" value="'.$jlast.'"></td></tr>
  <tr><td>Job-Id &nbsp;</td><td><input type="text" name="jid" placeholder="Job-Id" value="'.$jid.'"></td></tr>
  <tr><td>Job-Discription &nbsp;</td><td><textarea style="width:510px;height:100px;font-size:20px;font-family: Arial Black;"placeholder="Job-Discription" name="jdis">'.$jdis.'</textarea></td></tr>
  <tr><td colspan="2" ><button type="submit" name=submit>Update</button></td></tr>
  <tr><td></Form></td></tr>
</table>
</div>';

}
else
	{
	
$q2="delete from jobs where jid='$id' AND user='$cuser'";
$res=mysqli_query($con,$q2);
        if($res>0)
        {
            header("location:comphome.php?msg=Blog-Deleted");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }

    }

    
?>
	

<div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body></html>