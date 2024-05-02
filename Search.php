<?php include("hnav.php")?>
<?php
      $search=$_REQUEST['srch'];
      $con=mysqli_connect("127.0.0.1","root","","job_portal");
      
      
      $q1="select  regcmp.logo,regcmp.oname,jobs.jtitle,jobs.jloc,jobs.eligi,jobs.salary,jobs.post,jobs.last,jobs.disc,jobs.jid from regcmp,jobs where regcmp.email=jobs.user AND (jobs.jtitle='$search' OR jobs.jloc='$search')";
      $res=mysqli_query($con,$q1);
      while($row=mysqli_fetch_array($res))
      {
      echo"<div style='height:398px;background-color:#F0FFF0;width:1200px;margin-left:150px;'>";
     echo"<h2 style='display:inline;margin:10px;color:#FF9900;'>".$row[1]."</h2><h2 style='display:inline;margin-left:580px;'><span style='color:#FF9900;'>Posted On :</span>".$row[6]."</h2>";
     echo"<img src='".$row[0]."' style='width:300px;height:100px;display:inline;margin-top:10px;margin:10px;float:right;'>"; 
     echo"<h2 style='margin:10px;color:grey;'>".$row[2]."</h2>";
     echo "<img src='images/qual.png' style='width:30px;height:25px;margin-left:10px;display:inline;'>";
     echo"<h2 style='display:inline;margin:10px;color:grey;'>".$row[4]."</h2>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Job-Discription :&nbsp;</span>".$row[8]."</h2><br>";
     echo"<hr>";
     echo"<h2 style='display:inline;margin-left:10px;color:#FF9900;'>".$row[3]."</h2>&nbsp;&nbsp;<img src='images/loc.png' style='width:20px;height:25px;'><h2 style='display:inline;margin-left:380px;color:grey;'><img src='images/cal.png' style='width:20px;height:25px;'>&nbsp;&nbsp;<span style='color:#FF9900;'>Last Date :</span>".$row[7]."</h2><a href='jobsdetail.php?id=".$row[9]."' style='text-decoration:none;'><button style='display:inline;margin-left:325px;height:50px;width:100px;font-family: Arial Black;background-color:#FF9900;color:black;'>View</button></a>";
     echo"<hr></div><br>";
     }
     
     ?>