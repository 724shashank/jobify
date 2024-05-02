<?php include("cnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Ask-Admin</title>
	<style type="text/css">
		.input
     {
        margin-top:10px;
        margin-left: 20px;
        height: 40px;
        width: 350px;
        font-size: 20px;
       font-family:Arial Black;

    }
    .textarea
     {
        margin-left: 20px;
        height: 300px;
        width: 352px;
        font-size: 20px;
       font-family:Arial Black;

    }
    .button
    {
    margin-left:24px;
    height: 40px;
    width: 350px;
    font-size: 20px;
  font-family:Arial Black;
    }
    .button:hover
    {
      background-color: #4C4A48;
      color: white;
    }
    .div1
       {
        width:400px;
        height:600px;
        margin-left:580px; 
       margin-top:40px;
        box-sizing: border-box;
       box-shadow:5px 5px 5px 2px black;
        border-radius:10px; 
        border:1px solid black;
        background-color: #FF9900 
       }
	</style>
</head>
<body>
<div class="div1" id="grad1">
        <form method="POST">
                <center><img src="images/ic3.png" width="80" height="80"></center>
                <input type="text" name="sub" placeholder="Subject" class="input"required><br><br>
                <textarea placeholder="Message" class="textarea" name="message"required></textarea><br><br>
                <input type="submit" name=submit class="button"><br><br><input type="reset" class="button">
        
        </form>
		</div>
		<div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{

$sub=$_REQUEST['sub'];
$msg=$_REQUEST['message'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$sql="insert into askadmin(username,date,sub,com) values ('$cuser',curdate(),'$sub','$msg')";
$res=mysqli_query($con,$sql);
if($res>0)
{
    echo"<script>alert('Your Feedback is Submitted')</script>";
}
else
{
    echo"<script>alert('Error in Submission')</script>";
}
}
?>