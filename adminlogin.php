<!DOCTYPE html>
<html>
<head>
  <title>Admin-login</title>
  <style type="text/css">
    .input
{
  width:100%;
  height:50px;
  font-size:20px;
  font-family:Arial Black;
}
.card {
  background-color:#FF9900;
  padding: 20px;
  margin-top: 100px;
  width:25%;
  margin-left: 560px;
  box-shadow:5px 5px 5px 5px black;
 }
 
  </style>
</head>
<body bgcolor="#232F3E" >
<div class="card" id="grad1">
      <center><img src="images/l.png" width="100" height="100"></center><br>
      
        <form method="POST">
          <select name="utype" class="input">
                <option value="admin">Admin</option>
                
      </select><br><br>
       
      <input type="text" name="user" placeholder="Email" class="input"><br><br>
      <input type="password" name="pswd" placeholder="Password"class="input"><br><br><br>
      <center><button style="width:200px;height:50px;font-size:20px;font-family: Arial Black;background-color:#333;color:white;" name="login">Login</button></center>
         
        </form>
        </div>
      
    </div>
     </div>
     </body>
    </html>
    <?php
if(isset($_REQUEST['login']))
{
$auser=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];
$utype=$_REQUEST['utype'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q1="select * from login where username='$auser' AND pswd='$pswd' AND utype='admin'";
$res=mysqli_query($con,$q1);
if($row=mysqli_fetch_array($res))
{
  session_start();
  $_SESSION['auser']=$auser;
  header("location:adminhome.php");
}
else
{
  header("location:adminlogin.php?error=invalid Username or Password");
}
}
?>