<?php include("unav.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Apply</title>
</head>
<body>
  <form enctype="multipart/form-data" method="Post">
<div style="background-color:white;width:600px;height:650px;margin-top:20px;margin-left:450px;">
 <h2 style="background-color:#FF9900;color:black;font-family:Arial Black; "><center>Personal Information</center></h2>
  <input class="input" type="text" name="email" placeholder="Email" style="width:250px;height:40px;margin-top:10px;margin-left: 40px;">&nbsp;&nbsp;<input class="input" type="text" name="name" placeholder="Full Name" style="width:250px;height:40px;"><br><br>
  <input class="input" type="text" name="jtitle" placeholder="Job Title" style="width:250px;height:40px;margin-left: 40px;">&nbsp;&nbsp;<input class="input" type="text" name="phone" placeholder="Mobile" style="width:250px;height:40px;"><br><br>
<input class="input" type="text" name="state" placeholder="State" style="width:250px;height:40px;margin-left: 40px;">&nbsp;&nbsp;<input class="input" type="text" name="city" placeholder="Home town" style="width:250px;height:40px;"><br><br>
<input class="input" type="text" name="dob" placeholder="Date of Birth" style="width:250px;height:40px;margin-left: 40px;">
<h2 style="background-color:#FF9900;color:black;font-family:Arial Black; "><center>Qualification</center></h2>

<select class="input" style="width:250px;height:40px;margin-left: 40px;" name="schl" >
          <option>High-School</option>
          <option>Intermediate</option>
          <option>Graduation</option>
          <option>Post-Graduation</option>
          </select> &nbsp;&nbsp;<input class="input" type="text" name="ins" placeholder="Institution-Name" style="width:250px;height:40px;"><br><br><br><br>
          <input class="input" type="file" name="resume" style="width:520px;height:30px;margin-left: 40px;"><br><br><br><br>
          <button type="submit" name="submit" style="width:100px;height:40px;font-size:15pt;font-family:Arial Black;margin-left:40px;background-color:#FF9900">Submit</button><button type="reset" style="width:100px;height:40px;font-size:15pt;font-family:Arial Black;margin-left:320px;background-color:#FF9900">Reset</button>

</div>
</form>
<div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
<?php
if(isset($_REQUEST["submit"]))
{
$email=$_REQUEST['email'];
$name=$_REQUEST['name'];
$jbtit=$_REQUEST['jtitle'];
$mob=$_REQUEST['phone'];
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$dob=$_REQUEST['dob'];
$qual=$_REQUEST['schl'];
$inst=$_REQUEST['ins'];
$filename=$_FILES["resume"]["name"];
$tempname=$_FILES["resume"]["tmp_name"];
$folder="resumes/".$filename;
move_uploaded_file($tempname,$folder);
$jobid=$_REQUEST['id'];
$cuser=$_REQUEST['id2'];


$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q1="insert into applicant(email,name,jtitle,mobi,state,city,dob,qual,insti,resume,cuser,jobid,status)values('$email','$name','$jbtit','$mob','$state','$city','$dob','$qual','$inst','$folder','$cuser','$jobid','Waiting')";
$res1=mysqli_query($con,$q1);
if($res1>0)
{
  session_start();
  $_SESSION['user']=$user;
 header('location:userhome.php');
}
}
?>