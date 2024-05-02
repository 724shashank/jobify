<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
   background-color: #232F3E;
 background-repeat: no-repeat;
background-size: 1920px 1965px;


}

/* Header/Blog Title */
.header {
  padding: 30px;
 
  background: lightgrey;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
  height:70px;
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
  background-color: #FF9900;
  color: black;
  height:70px;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: ;
  padding-left: 20px;
}



/* Add a card effect for articles */
.card {
  background-color:mistyrose;
  padding: 20px;
  margin-top:20px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #333;
  margin-top: 20px;
  color: white;
}
button
{
  width:100px;
  height:50px;
  background-color: #333;
  color:white;
  font-size:15px; 

}
button:hover
{
  background-color: #ddd;
  color: purple;
}
.input
     {
        margin-top:10px;
        margin-left: 20px;
        height: 40px;
        width: 350px;
        font-size: 20px;
       font-family: Arial Black;

    }
    .textarea
     {
        margin-left: 20px;
        height: 300px;
        width: 352px;
        font-size: 20px;
        font-family: Arial Black;

    }
    .button
    {
    margin-left:24px;
    height: 40px;
    width: 350px;
    font-size: 20px;
  font-family: Arial Black;
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
        background-color: #FF9900;
  
       }
       
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
  <title>Ask-Queries</title>
</head>
<body>
  <div class="topnav">
  <a href="userhome.php">Home</a>
  <a href="ujobshow.php">Jobs</a>
  <a href="applied.php">Applied-Jobs</a>
  <a href="lecturess.php">Courses</a>
  <a href="quizes.php">Quiz</a>
  <a href="uaskqry.php">Ask-Queries</a> 
  <a href="logout.php" style="float:right">Logout</a>
  <a href="profile.php" style="float:right">Profile</a> 
</div>

<div class="div1">
        <form method="POST">
                <center><img src="images/ic3.png" width="80" height="80"></center>
                <input type="text" name="cuser" placeholder="Company-Username" class="input"required><br><br>
                <textarea placeholder="Question" class="textarea" name="ques"required></textarea><br><br>
                <input type="submit" name=submit class="button"><br><br><input type="reset" class="button">
        
        </form>
    </div>
    <div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
session_start();
$user=$_SESSION['user'];
$cuser=$_REQUEST['cuser'];
$ques=$_REQUEST['ques'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$sql1="select * from indreg where email='$user'";
$res=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($res);
$name=$row[1];
$sql2="insert into askcomp(user,cuser,date,name,ques) values ('$user','$cuser',curdate(),'$name','$ques')";
$res=mysqli_query($con,$sql2);
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