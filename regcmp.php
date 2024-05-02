<!DOCTYPE html>
<html>
<head>
	<title>Corporate-Registration</title>
	<style type="text/css">
		body
		{
			background-color:#232F3E;
		}
		.card
		{
			width:80%;
			height:650px;
			margin-left:160px;
			margin-top:50px;
			box-shadow:5px 5px 5px 2px black;
			border:1px solid black;
			border-radius:15px;
			background-color: #FF9900;
		}
		.box
		{
			font-size:16px;
			background:white;
			width:350px;
			height:50px;
	
		}
		.input 
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
    	 overflow: hidden;
 		 background-color: #333;
 		 height: 60px;
 		 font-family: Arial Black;
  		 font-size: 15pt;
  		 color: white;

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
		input:focus
	  {
	  background-color:lightgrey;
	  transition:0s;
	  color:black;
	  box-shadow: 1px 1px 1px white;
	  }
	  .footer {
  padding: 20px;
  text-align: center;
  background: #333;
  margin-top: 20px;
  color: white;
}
	</style>
	
</head>
<body >

<div class="card" >
<center><img src="images/reg.png" style="width:100px;height:100px;margin:10px;"></center>
	<form enctype="multipart/form-data" method="Post">
	<center><table  width="1050px" height="500px">

			<tr>
				<th ><input type="text" placeholder="Organization Name" class="input" required name="oname" id="oname"></th>

			    <th><input type="text" placeholder="Organization Adderess Line"class="input"required name="addr" id="addr"></th>
			</tr>

			<tr>
				<th><input type="text" placeholder="Organization Website" class="input" required name="web" id="web"></th>

				<th><input type="text" placeholder="Organization Country" class="input" required name="count" id="count"></th>
			</tr>

			<tr>
				<th><input type="Text" placeholder="State" class="input" required name="state"></th>

					<th><input type="number" placeholder="Postal/Pin Code"class="input" required name="zip"></th>
			</tr>

			
			<tr>
				<th><input type="number" placeholder="Organization Contact Number"class="input"required="required" name="mobile" id="mob"></th>
				<th><input type="text" placeholder="ISO Certification Number"class="input"required="required"name="iso"></th>
			</tr>

			<tr>
				<th><select class="input" name="utype">
					<option>Corporate</option>
					
					</select>
				</th>
		
				<th><div class="div">
				<span style="opacity:0.5;font-size:20px;font-family: Arial Black;float:left">Organization Logo</span>
					<input type="file" id=box style="display:none;" name="photo">
					<label for=box class="browse">Browse</label>
					</div>
				</th>
			</tr>
			<tr>
			    <th><input type="text" placeholder="Full Name"class="input"required name="name" id="name"></th>

				<th ><input type="text" placeholder="Email" class="input" required name="user" id="user"></th>

			</tr>

			<tr>
				<th><input type="password" placeholder="Password" class="input" required name="pswd" id="pswd"></th>

				<th><input type="password" placeholder="Confirm Password" class="input" required name="cpswd" id="cpswd"></th>
			</tr>

			<tr>
				<th><input type="Number" placeholder="Phone Number" class="input" required name="phone" id="phone"></th>

					<th><button type="submit" name="submit" value="submit">Submit</button>
					</th>
			</tr>
				</table></center>
	
	</form>
</div>

<div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>


</body>
</html>



<?php
if(isset($_REQUEST["submit"]))
{
$oname=$_REQUEST['oname'];
$addr=$_REQUEST['addr'];
$web=$_REQUEST['web'];
$count=$_REQUEST['count'];
$state=$_REQUEST['state'];
$zip=$_REQUEST['zip'];
$mobile=$_REQUEST['mobile'];
$iso=$_REQUEST['iso'];
$utype=$_REQUEST['utype'];
$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder="corporate/".$filename;
move_uploaded_file($tempname,$folder);
$fname=$_REQUEST['name'];
$user=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];
$phone=$_REQUEST['phone'];


$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q1="insert into regcmp(oname,addr,web,count,state,pin,ocon,iso,utype,logo,fname,email,phone,status)values('$oname','$addr','$web','$count','$state','$zip','$mobile','$iso','$utype','$folder','$fname','$user','$phone','Disallowed')";
$q2="insert into login(username,pswd,utype)values('$user','$pswd','corporate')";
$res1=mysqli_query($con,$q1);
$res2=mysqli_query($con,$q2);
if($res1>0&& $res2>0)
{
	session_start();
	$_SESSION['user']=$user;
 header('location:index.php');
}
}
?>




