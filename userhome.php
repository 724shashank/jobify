<div class="header">
 <div  style="max-width:500px;">
  <img class="mySlides" src="images/3.jpg" style="width:1503px;height:400px;">
  <img class="mySlides" src="images/4.jpg" style="width:1503px;height:400px;">
  <img class="mySlides" src="images/10.jpg" style="width:1503px;height:400px;">
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
<?php include("unav.php")?>
<!DOCTYPE html>
<html>
<head>
  <title>User Home</title>
  <style type="text/css">
    button
{
  width:100px;
  height:50px;
  background-color:#333;
  color:white;
  font-size:15px;
  margin-left:15px; 
  font-family: Arial Black;
  font-size:10pt; 

}
button:hover
{
  background-color: #FF9900;
  color:black;
}
  </style>
</head>
<body>
<div style="width:1250px;height:700px;float:left;background-color:#232F3E;">
<div style="width:1217px;height:660px;margin-top:20px;margin-left:20px;overflow-y: auto;">
   <?php
     
      $con=mysqli_connect("127.0.0.1","root","","job_portal");
      $q1="select  regcmp.logo,regcmp.oname,jobs.jtitle,jobs.jloc,jobs.eligi,jobs.salary,jobs.post,jobs.last,jobs.disc,jobs.jid,jobs.user from regcmp,jobs where jobs.user=regcmp.email";
      $res=mysqli_query($con,$q1);
      while($row=mysqli_fetch_array($res))
      {
      echo"<div style='height:398px;background-color:#F0FFF0;width:1200px;'>";
     echo"<h2 style='display:inline;margin:10px;color:#FF9900;'>".$row[1]."</h2><h2 style='display:inline;margin-left:580px;color:grey;'><span style='color:#FF9900;'>Posted On :</span>".$row[6]."</h2>";
     echo"<img src='".$row[0]."' style='width:300px;height:100px;display:inline;margin-top:10px;margin:10px;float:right;'>"; 
     echo"<h2 style='margin:10px;color:grey;'>".$row[2]."</h2>";
     echo "<img src='images/qual.png' style='width:30px;height:25px;margin-left:10px;display:inline;'>";
     echo"<h2 style='display:inline;margin:10px;color:grey;'>".$row[4]."</h2>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Job-Discription :&nbsp;</span>".$row[8]."</h2><br>";
     echo"<hr>";
     echo"<h2 style='display:inline;margin-left:10px;color:#FF9900;'>".$row[3]."</h2>&nbsp;&nbsp;<img src='images/loc.png' style='width:20px;height:25px;'><h2 style='display:inline;margin-left:380px;color:grey;'><img src='images/cal.png' style='width:20px;height:25px;'>&nbsp;&nbsp;<span style='color:#FF9900;'>Last Date :</span>".$row[7]."</h2><a href='ujobdetail.php?id=".$row[9]."&id2=".$row[10]."' style='text-decoration:none;'><button style='display:inline;margin-left:325px;height:50px;width:100px;font-family: Arial Black;background-color:#FF9900;color:black;'>View&Apply</button></a>";
     echo"<hr></div><br>";
     }
     ?>
</div>
</div>
<div style="width:250px;height:700px;float:right;background-color:#232F3E;">
 <center style="background-color:#FF9900;color:black;height:50px;font-family: Arial Black;"><h1>Companies</h1></center>
  <div style="width: 250px;height:280px;background-color:#F0FFF0;overflow-y: auto;"><br>
    <div style="height:150px;">
        <?php
      $con=mysqli_connect("127.0.0.1","root","","job_portal");
      $q2="select regcmp.oname,regcmp.email,jobs.user from regcmp,jobs where regcmp.email=jobs.user";
      $res2=mysqli_query($con,$q2);
       while($raw=mysqli_fetch_array($res2))
      {
      echo"<a href='buttonjob.php?value=".$raw[1]."'><button>".$raw[0]."</button></a>";
       
      }
       ?>
    </div>
  </div>
  <div style="width: 250px;height:310px;background-color:#F0FFF0;margin-top:20px;">
    <center style="background-color:#FF9900;color:black;height:50px;font-family: Arial Black;font-size:10pt;"><h1>Message-Board</h1></center>
      <div style="overflow-y:auto;height:260px;">
        <ol >
         <?php
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$query="select * from mssge ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
echo"<li>".$row['mssg']."</li><hr>";
}
?>         
       </ol>
      </div>
  </div>
</div>

 <div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>