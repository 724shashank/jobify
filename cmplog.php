<!DOCTYPE html>
<html>
<head>
  <title>Corporate-login</title>
  <style type="text/css">
    body
    {
  padding: 10px;
  background-color: #232F3E;
  background-repeat: no-repeat;
  background-size: 1920px 1965px;
  font-family: 'Playfair Display', serif;
  font-size:20px;
    }
    .input
{
  width:100%;
  height:50px;
  font-size:20px;
  font-family: Comic Sans MS;
}
.card {
  background-color:purple;
  padding: 20px;
  margin-top: 100px;
  width:25%;
  margin-left: 560px;
  box-shadow:5px 5px 5px 5px black;
 }

  </style>
</head>
<body >
<div class="card" style="background-color: #FF9900">
      <center><img src="images/l.png" width="100" height="100"></center><br>
      
        <form method="POST">
          <select name="utype" class="input">
                <option value="author">Corporate</option>
                
      </select><br><br>
       
      <input type="text" name="user" placeholder="Email" class="input"><br><br>
      <input type="password" name="pswd" placeholder="Password"class="input"><br><br><br>
      <button style="width:200px;height:50px;font-size:20px;font-family: Comic Sans MS;display:inline;" name="login">Login</button><a href="index.php" style="margin-left: 100px">Back</a>
      
       
        </form>
        </div>
      
    </div>
     </div>
     </body>
    </html>
    <?php
if(isset($_REQUEST['login']))
{
$user=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];

$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q1="select * from login where username='$user' AND pswd='$pswd' AND utype='Corporate'";
$res=mysqli_query($con,$q1);
if($row=mysqli_fetch_array($res))
{
  session_start();
  $_SESSION['user']=$user;
  header("location:comphome.php");
}
else
{
  header("location:login.php?error=invalid Username or Password");
}
}
?>