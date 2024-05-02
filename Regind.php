<!DOCTYPE html>
<html>
<head>
	<title>User-Registration</title>
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
			height:60px;
			font-size:20px;
			font-family: Arial Black;
			float: left;

		}
		

		label:hover
		{
		background-color:#ddd;
		color:purple;
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

<div class="card">
<center><img src="images/reg.png" style="width:100px;height:100px;margin:10px;"></center>
	<form method="Post" enctype="multipart/form-data" action="#" onsubmit="return validation()">
	<center><table  width="1050px" height="500px">

			<tr>
				<th ><input type="text" placeholder="Email" class="input" required name="user" id="user"></th>

			    <th><input type="text" placeholder="Name"class="input"required name="name"></th>
			</tr>

			<tr>
				<th><input type="password" placeholder="Password" class="input" required name="pswd" id="pswd"></th>

				<th><input type="password" placeholder="Confirm Password" class="input" required name="cpswd" id="cpswd"></th>
			</tr>

			<tr>
				<th><input type="Text" placeholder="State" class="input" required name="state"></th>

					<th><input type="text" placeholder="City"class="input" required name="city"></th>
			</tr>

			<tr>
				<th colspan="2"><input type="text" placeholder="Adderess"style="width:1040px;height: 100px;font-size: 20pt;font-family: Arial Black;" required name="addr"></th>
			</tr>
						

			<tr>
				<th><input type="text" placeholder="Date-of-Birth"class="input"required="required"name="dob"></th>

				<th><input type="number" placeholder="Mobile no."class="input"required="required" name="mobile" id="mob"></th>
			</tr>

			<tr>
				<th><select class="input" name=utype>
					<option>User</option>
					
					</select>
				</th>
		
				<th><div class="div">
				<span style="opacity:0.5;font-size:20px;font-family: Arial Black;float:left">Profile-Photo</span>
					<input type="file" id=box style="display:none;" name="photo">
					<label for=box class="browse">Browse</label>
					</div>
				</th>
			</tr>

				<tr>
					<th><button type="submit" name="submit" value="submit">Submit</button>
					</th>
				</tr>
				</table></center>
	
	</form>
	
</div>

<div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>

<script type="text/javascript">
	function validation()
	{
		var user = document.getElementById('user').value;
		var pswd = document.getElementById('pswd').value;
		var cpswd = document.getElementById('cpswd').value;
		var mob = document.getElementById('mob').value;
		
		if(user.indexOf('@')<=0)
		{
			 document.getElementById('user');
			 alert("** @ Invalid Position");
			 return false;
		}
		if((user.charAt(user.length-4)!='.')&&(user.charAt(user.length-3)!='.'))
		{
			document.getElementById('user');
			alert("** . Invalid Position");
			 return false;	
		}
		if((pswd.length<8)||(pswd.length>30))
		{
			 document.getElementById('pswd');
			 alert("** Passwords Lenght Must Be Between 8 To 30");
			 return false;
		}
		if(pswd!=cpswd)
		{
			document.getElementById('pswd');
			alert("** Password Do Not Match The Confirm Password");
			return false;
			
		}
		if(isNaN(mob))
		{
		document.getElementById('mob');
		alert("** User Must Write Digits Only Not Characters");
			return false;	
		}
		if(mob.length!=10)
		{
		document.getElementById('mob');
		alert("** Mobile Number Must Be 10 Digits Only");
			return false;	
		}
	}

	</script>
</body>
</html>



<?php
if(isset($_REQUEST["submit"]))
{
$user=$_REQUEST['user'];
$name=$_REQUEST['name'];
$pswd=$_REQUEST['pswd'];
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$address=$_REQUEST['addr'];
$dob=$_REQUEST['dob'];
$mobile=$_REQUEST['mobile'];
$utype=$_REQUEST['utype'];
$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder="user/".$filename;
move_uploaded_file($tempname,$folder);


$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q1="insert into indreg(email,name,state,city,addr,dob,mob,user,photo)values('$user','$name','$state','$city','$address','$dob','$mobile','$utype','$folder')";
$q2="insert into login(username,pswd,utype)values('$user','$pswd','user')";
$res1=mysqli_query($con,$q1);
$res2=mysqli_query($con,$q2);
if($res1>0 && $res2>0)
{
	session_start();
	$_SESSION['user']=$user;
 header('location:index.php');
}
}
?>




