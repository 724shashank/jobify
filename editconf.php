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
$_SESSION['id']=$_REQUEST['id'];
$id=$_SESSION['id'];
$opr=$_REQUEST['opr'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q="select * from question where qid='$id'";
if($opr=='edit')
{
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
session_start();
$_SESSION['qid']=$row[0];
$ques=$row[1];
$opt1=$row[2];
$opt2=$row[3];
$opt3=$row[4];
$opt4=$row[5];
$ans=$row[6];
		echo"<form action='updated.php' method='POST'>
        <div style='background-color:white;width:500px;height:510px;margin-left:515px;margin-top:50px;'>
  <table>
    <tr><td style='text-align: center;width:500px;background-color:#FF9900;margin-left: 140px;font-size:30px;font-family:Arial Black;'>Edit-Question</td></tr>
  </table>
  <input type='text' name='ques' value='".$ques."' style='width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;'>
  <input type='text' name='opt1' value='".$opt1."' style='width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;'>
  <input type='text' name='opt2' value='".$opt2."' style='width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;'>
  <input type='text' name='opt3' value='".$opt3."' style='width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;'>
  <input type='text' name='opt4' value='".$opt4."' style='width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;'>
  <input type='text' name='crrct' value='".$ans."' style='width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;'>
  <input type='submit' name='submit' style='width:225px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;background-color:#333;color:white;'><input type='reset' style='width:225px;height:50px;margin-top:10px;margin-left:10px;font-family:Arial Black;font-size:15pt;background-color:#333;color:white;'>
  
</div></form>";

}
else
	{
	
$q2="delete from question where qid='$id'";
$res=mysqli_query($con,$q2);
        if($res>0)
        {
            header("location:adminhome.php?msg=Question-Deleted");
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