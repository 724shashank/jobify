<?php
include('cnav.php');
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q="select * from jobs where user='$cuser'";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if($row>0)
{
echo'<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		.card2
		{
		 background-color:#FF9900;
  		 padding: 20px;
  		 margin-top:200px;
  		 width:600px;
  		}
  		.input
{
  width:100%;
  height:50px;
  font-size:20px;

}

button
{
  width:100px;
  height:50px;
  background-color: #333;
  color:white;
  font-size:15px;

}

	</style>
</head>
<body>

<center><div class="card2">
<form action="delconf.php" method="POST">
<table>
<tr><td><h3>Enter Your Job ID:&nbsp;&nbsp;</h3></td><td><input type="text" name="id" class="input" style="height: 30px;"></td></tr>
<tr ><td><h3>Choose Operation:</h3></td>
<td>Edit<input type="radio" name="opr" value="edit"></td>
<td>Delete<input type="radio" name="opr" value="delete"></td>
</tr>
<tr><td><button name="submit">Submit</button></td></tr>
</table>
</form>
</div></center>

<div class="footer" style="margin-top:150px;"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div></body></html>';
}
else
{
	header("location:comphome.php?message=You Can't Do That");
}
?>

