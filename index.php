<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
  <style type="text/css">
    body {
 background-color: #232F3E;
  /*background: url(Images/5.jpg);*/
  background-repeat: no-repeat;
  background-size: 1920px 1965px;

}

    .header {
 width:100%;


}
  .topnav {
  overflow: hidden;
  background-color: #333;
  height: 70px;
  font-family: Arial Black;
  font-size: 15pt;

}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color:#FF9900;
  color: black;
  height: 70px
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
<body>
  <div class="header">
 <div  style="max-width:500px;">
  <img class="mySlides" src="images/3.jpg" style="width:1502px;height:400px;">
  <img class="mySlides" src="images/4.jpg" style="width:1502px;height:400px;">
  <img class="mySlides" src="images/10.jpg" style="width:1502px;height:400px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="jobshow.php">Jobs</a>
  <a href="Registration.php">Registration</a>
  <a href="registercomp.php">Companies Registered</a>
  <a href="aboutus.php">About-Us</a>
  <a href="contactus.php">Contact-Us</a>
  <a href="login.php" style="float:right">Login</a>
</div>
<hr>
<center>
<form style="margin-top:100px;" action="search.php" method="POST">
  <input type="search" name="srch" placeholder="Title/Location" style="width:500px;height:50px;font-family:Arial Black">  
  <input type="Submit" value="Search" style="width:100px;height:51px;font-family:Arial Black;background-color: #FF9900">
</form>
  </center>

  <div style="margin-top:100px;overflow-y:scroll;background-color:#F0FFF0;color:white;;width:100%;height:220px;">
 <?php
 $con=mysqli_connect("127.0.0.1","root","","job_portal");
      $q1="select regcmp.logo,jobs.jid from regcmp,jobs where jobs.user=regcmp.email";
      $res=mysqli_query($con,$q1);
      
      while($row=mysqli_fetch_array($res))
      {
  echo"<div style='width:15%;height:150px;float: left;margin:10px;margin-left:60px;margin-bottom:60px;margin-top:20px;'>

      <img src='".$row[0]."' style='width:100%;height:150px;'><center>
      <a href='jobsdetail.php?id=".$row[1]."' style='text-decoration:none;'><button style='width:150px;height:30px;background-color:#FF9900;color:black;font-family:Arial Black'>Click To View</button></a>
    </center></div>";
	  }
  ?>  
   
</div>
  <br><br><br>
  <img src="images/placement.png" style="width:100%">
  <div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
