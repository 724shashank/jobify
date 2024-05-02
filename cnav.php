
<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
    body {
 background-color: #232F3E;
  /*background: url(Images/5.jpg);*/
  background-repeat: no-repeat;
  background-size: 1920px 1965px;

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
<div class="topnav">
  <a href="comphome.php">Home</a>
  <a href="jobpost.php">Post-Jobs</a>
  <a href="myjobs.php">Posted-Jobs</a>
  <a href="delete.php">Delete-Jobs</a>
  <a href="applicants.php">Applicants</a>
  <a href="askadmin.php">Ask-Admin</a>
  <a href="query.php">Queries</a>
  <a href="logout.php" style="float:right">Logout</a>
</div>
</body>
</html>

<?php
session_start();
$cuser=$_SESSION['user'];
?>