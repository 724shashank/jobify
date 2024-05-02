<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
 font-family:Arial Black;
}

body{
  
     background-color: #232F3E;
  /*background: url(Images/5.jpg);*/
  background-repeat: no-repeat;
  background-size: 1920px 1965px;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  padding:50px;
}

/* Change color on hover */
.topnav a:hover {
  background-color:#FF9900;
  color: black;
  width:200px;
}


.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 615px;
  background: #FF9900;
  padding: 30px 0px;
  position: absolute;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color:black;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color:#232F3E;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #232F3E;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 0px;
}
.footer {
  padding: 60px;
  text-align: center;
  background: #333;
  margin-top: 15px;
  color: white;
}
	</style>
</head>
<body>

 <div class="topnav">
  <a><h4>Dashboard&nbsp;&nbsp;&nbsp;&nbsp;</h4></a>
  <a href="logout.php" style="float:right"><h4>Logout</h4></a>
 </div>

<div class="wrapper">
    <div class="sidebar">
        <h2 style="color: black;">MENU</h2>
        <ul>
            <li><a href="comphome.php"><i class="fas fa-home"></i>&nbsp;Home</a></li>
            <li><a href="jobpost.php"><i class="fas fa-user"></i>&nbsp;Post-Jobs</a></li>
            <li><a href="myjobs.php"><i class="fas fa-user"></i>&nbsp;Posted-Jobs</a></li>
            <li><a href="delete.php"><i class="fas fa-user"></i>&nbsp;Delete-Jobs</a></li>
            <li><a href="applicants.php"><i class="fas fa-address-card"></i>&nbsp;Applicants</a></li>
            <li><a href="askadmin.php"><i class="fas fa-address-book"></i>&nbsp;Ask-Admin</a></li>
            <li><a href="query.php"><i class="fas fa-blog"></i>&nbsp;Queries</a></li>
           
            
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
          
        <div class="info" style="background-color:none;height:500px;">
          <?php
          session_start();
          $cuser=$_SESSION['user'];
          $con=mysqli_connect("127.0.0.1","root","","job_portal");
      $q1="select * from regcmp where email='$cuser'";
      $res=mysqli_query($con,$q1);
      $row=mysqli_fetch_array($res);


          $s1=mysqli_query($con,"select * from jobs where user='$cuser'");
          $res1=mysqli_num_rows($s1);
          $s2=mysqli_query($con,"select * from applicant where cuser='$cuser'");
          $res2=mysqli_num_rows($s2);
          $s3=mysqli_query($con,"select * from askcomp where cuser='$cuser'");
          $res3=mysqli_num_rows($s3);
         

          
          echo"<img src='".$row[9]."' style='width:100%;height:300px;'>";

          

          echo"<br><br>";

          echo"<div style='background-color:#FF9900;width:300px;height:250px;float:left;border-radius:50px;'><h1 style='text-align:center;margin-top:80px;color:black;'>Total-Jobs:</h1><h1 style='margin-top:30px;text-align:center;color:black;'>$res1</h1></div>";

          echo"<div style='background-color:#FF9900;width:300px;height:250px;float:left;border-radius:50px;margin-left:180px;'><h1 style='text-align:center;margin-top:80px;color:black;'>Total-Applicants:</h1><h1 style='margin-top:30px;text-align:center;color:black;'>$res2</h1></div>";


          echo"<div style='background-color:#FF9900;width:300px;height:250px;float:right;border-radius:50px;'><h1 style='text-align:center;margin-top:80px;color:black;'>Total-Queries:</h1><h1 style='margin-top:30px;text-align:center;color:black;'>$res3</h1></div>";
          ?>
         
      </div>
    </div>
</div>
<div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>

