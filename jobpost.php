<?php include("cnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Job-Post</title>
	<style type="text/css">
		input 
		{
			width:510px;
			height:50px;
			font-size:20px;
			font-family: Arial Black;

		}
		.div
		{
		background-color:white;
		width: 510px;
		height: 50px;
		border:1px solid black;	
		}
		.browse
		{
		color:white;
		float: right;
		font-size:20px;
		height:50px;
		border:1px solid black;
		border-radius:1px;
		background-color: #4C4A48;	
		font-family: Arial Black;
		}
		button
		{
	
		 width:250px;
 	 	 float: right;
    	 overflow: hidden;
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
	if(isset($_SESSION['user']))
{
	$con=mysqli_connect("127.0.0.1","root","","job_portal");
	$sql="select * from  regcmp where email='$cuser' and status='Disallowed' ";
        $res=mysqli_query($con,$sql);
        if($row=mysqli_fetch_array($res))
        {
        	header('location:comphome.php?info=This Feature is Locked');
       
        }
        else
        {
echo"<center>
<div style='background-color: #FF9900;width:800px;margin-top:50px;height:600px;overflow-y:scroll;'>
	<br>
<table style='font-family:Arial Black;font-size:15pt;'>

	<Form method='POST'>
	<tr><td>Job-Title &nbsp;</td><td><input type='text' name='jtitle' placeholder='Job-Title'></td></tr>
	<tr><td>Job-Location &nbsp;</td><td><input type='text' name='jloc'placeholder='Location'></td></tr>
	<tr><td>Eligibility &nbsp;</td><td><input type='text' name='jele' placeholder='Eligibility'></td></tr>
	<tr><td>Salary &nbsp;</td><td><input type='text' name='jsal'placeholder='Salary'></td></tr>
	<tr><td>Last-Date &nbsp;</td><td><input type='date' name='jlast' placeholder='Last-Date'></td></tr>
	
	<tr><td>Job-Type &nbsp;</td><td><input type='text' name='jtype' placeholder='Job-Type'></td></tr>
	<tr><td>Job-Role &nbsp;</td><td><input type='text' name='jrole' placeholder='Job-Role'></td></tr>
	<tr><td>Job-Category &nbsp;</td><td><input type='text' name='jcat' placeholder='Job-Category'></td></tr>
	<tr><td>Hiring-Process &nbsp;</td><td><input type='text' name='jhir' placeholder='Hiring-Process'></td></tr>
	<tr><td>Who Can Apply  &nbsp;</td><td><input type='text' name='jwho' placeholder='Who Can Apply'></td></tr>
	<tr><td>Job-Discription &nbsp;</td><td><textarea style='width:510px;height:100px;font-size:20px;font-family: Arial Black;'placeholder='Job-Discription' name='jdis'></textarea></td></tr>
	<tr><td colspan='2' ><button type='submit' name=submit>POST</button></td></tr>
	</Form>
</table>
</div>
</center>";
}
}
?>

<div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>

<?php
if(isset($_REQUEST["submit"]))
{
session_start();
$cuser=$_SESSION['user'];	
$jtitle=$_REQUEST['jtitle'];
$jloc=$_REQUEST['jloc'];
$eligi=$_REQUEST['jele'];
$sal=$_REQUEST['jsal'];
$jlast=$_REQUEST['jlast'];
$jid=rand(10,1000);
$jtype=$_REQUEST['jtype'];
$jrole=$_REQUEST['jrole'];
$jcat=$_REQUEST['jcat'];
$jhir=$_REQUEST['jhir'];
$jwho=$_REQUEST['jwho'];
$jdis=$_REQUEST['jdis'];

$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q1="insert into jobs(user,jtitle,jloc,eligi,salary,post,last,jid,disc,jtype,jrole,jcat,jhir,jwho)values('$cuser','$jtitle','$jloc','$eligi','$sal',curdate(),'$jlast','$jid','$jdis','$jtype','$jrole','$jcat','$jhir','$jwho')";
$res1=mysqli_query($con,$q1);
if($res1>0)
{
	
 header('location:comphome.php');
}
}
?>

