
<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
    body {
 background-color: #232F3E;
 background-repeat: no-repeat;
background-size: 1920px 1965px;

}
 .input {
  overflow: hidden;
  background-color: #333;
  height: 70px;
  font-family: Arial Black;
  font-size: 15pt;
  color: white;

}
.input:hover {
  background-color:white;
  color: black;
  height: 70px;
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
.header {
               
                width:100%;

        }
  
</style>
</head>
<body>
<div class="topnav">
  <a href="userhome.php">Home</a>
  <a href="ujobshow.php">Jobs</a>
  <a href="Applied.php">Applied-Jobs</a>
  <a href="lectures.php">Courses</a>
  <a href="quizes.php">Quiz</a>
  <a href="uaskqry.php">Ask-Queries</a>
  <a href="logout.php" style="float:right">Logout</a>
  <a href="profile.php" style="float:right">Profile</a>
</div>
<?php
session_start();
$user=$_SESSION['user'];
?>
</body>
</html>