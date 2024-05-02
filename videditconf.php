<?php include('adnav.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		.card2
		{
		 background-color:mistyrose;
  		 padding: 20px;
  		 margin-top:50px;
  		 width:1200px;
  		 margin-left:150px;
  		}
  		.button
{
  width:100px;
  height:50px;
  background-color: #333;
  color:white;
  font-size:15px;

}
.button:hover
{
  background-color: #ddd;
  color: purple;
}
	</style>
</head>
<body>



<?php
session_start();
$_SESSION['id']=$_REQUEST['id'];
$id=$_SESSION['id'];
$opr=$_REQUEST['opr'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q="select * from videos where vid='$id'";
if($opr=='edit')
{
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
$vtitle=$row[1];
$vdisc=$row[2];


		echo"<form action='vidupd.php' method='POST'>
        <div style='background-color:white;width:500px;height:410px;margin-left:515px;margin-top:50px;'>
  <table>
    <tr><td style='text-align: center;width:500px;background-color:#FF9900;margin-left: 140px;font-size:30px;font-family:Arial Black;'>Edit</td></tr>
  </table>
  <input type='text' name='title' value='".$vtitle."' style='width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;'>
  <textarea type='text' name='disc' style='width:450px;height:200px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;'>$vdisc</textarea>
  <input type='submit' name='submit' style='width:225px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;background-color:#333;color:white;'><input type='reset' style='width:225px;height:50px;margin-top:10px;margin-left:10px;font-family:Arial Black;font-size:15pt;background-color:#333;color:white;'>
  
</div></form>";

}
else
	{
	
$q2="delete from videos where vid='$id'";
$res=mysqli_query($con,$q2);
        if($res>0)
        {
            header("location:adminhome.php?msg=Video-Deleted");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }

    }

    
?>
	

<div class="footer" style="margin-top:110px;"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body></html>