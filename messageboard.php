<?php include("adnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Message-Board</title>
	<style type="text/css">
	.input 
		{
			width:250px;
			height:50px;
			font-size:20px;
			font-family:Arial Black;
		}
		textarea
		{
			width:250px;
			height:200px;
			font-size:20px;
			font-family:Arial Black;

		}
		.button
		{
			width:250px;
			height:40px;
			font-size:20px;
			font-family:Arial Black;
			float: left;
			background-color:#4C4A48;
			color: white;
			margin-left:25px;

		}
		.card
		{
			width:40%;
			height:500px;
			background-color:#FF9900;
			margin-left:60px;
			margin-top:20px;
			box-shadow:5px 5px 5px 2px black;
			border:1px solid black;
			border-radius:15px;
		}
		</style>
</head>
<body>
	<center>
		<div class="card">
		<form method="POST">
		<table style="margin-top:10px;width:600px;height:480px;font-family:Arial Black;">
	<tr><td colspan="2"style="background-color:#4C4A48;color:white;text-align:center;">Add/Delete Message</td></tr>
	<tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr>
	<tr><td>Add-Message</td><td><input type="radio"name="opr" value="add"></td></tr>
	<tr><td>Delete-Message</td><td><input type="radio"name="opr"value="delete"></td></tr>
	<tr><td>Message-ID</td><td><input type="number" name="id" class="input"></td></tr>
	<tr><td>Message-Text</td><td><textarea name="msg"></textarea></td></tr>
	<tr><td><input type="submit"class=button></td><td><input type="reset"class=button></td></tr>
		</table>
		</form>
		</div>
<br>
<div class="footer"> 
  <h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</center>
</body>
</html>
<?php
if(isset($_REQUEST['opr']))
{
$id=$_REQUEST['id'];
$mssg=$_REQUEST['msg'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q1="insert into mssge(id,mssg) values ('$id','$mssg')";
$q2="delete from mssge where id='$id'";
if($_REQUEST["opr"]=="add")
{
	$res=mysqli_query($con,$q1);
	if($res>0)
	{
	    echo"<script>alert('Your message is Submitted')</script>";
	}
	else
	{
	    echo"<script>alert('Error in Submission')</script>";
	}
}
else
{
	$res=mysqli_query($con,$q2);
	if($res>0)
	{
	    echo"<script>alert('Your Message is Deleted')</script>";
	}
	else
	{
	    echo"<script>alert('Error in Deletion')</script>";
	}	
}
}
?>