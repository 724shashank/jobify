<?php include("unav.php")?>
<br><br>

     <style type="text/css">
        button {
      display:inline;
      margin-left:535px;
      height:50px;width:150px;
      font-family: Arial Black;
      background-color:#FF9900;
      color:black;
 
                     }
     </style> 

      <?php
      
      $id=$_REQUEST['id'];
      $con=mysqli_connect("127.0.0.1","root","","job_portal");
      $q1="select  regcmp.logo,regcmp.oname,jobs.jtitle,jobs.jloc,jobs.eligi,jobs.salary,jobs.post,jobs.last,jobs.disc,jobs.jtype,jobs.jrole,jobs.jcat,jobs.jhir,jobs.jwho,jobs.jid,jobs.user from regcmp,jobs where jobs.jid='$id' AND jobs.user=regcmp.email";
      $res=mysqli_query($con,$q1);
      while($row=mysqli_fetch_array($res))
      {
      echo"<div style='height:398px;background-color:#F0FFF0;width:1200px;margin-left:150px;'>";
     echo"<h2 style='display:inline;margin:10px;color:#FF9900'>".$row[1]."</h2>";
     echo"<img src='".$row[0]."' style='width:300px;height:100px;display:inline;margin-top:10px;margin:10px;float:right;'>"; 
     echo"<h2 style='margin:10px;color:grey;'>".$row[2]."</h2>";
     echo "<img src='images/qual.png' style='width:30px;height:25px;margin-left:10px;display:inline;'>";
     echo"<h2 style='display:inline;margin:10px;color:grey;'>".$row[4]."</h2>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Job-Discription :&nbsp;</span>".$row[8]."</h2><br>";
     echo"<hr>";
     echo"<h2 style='display:inline;color:grey;'><img src='images/cal.png' style='width:20px;height:25px;'>&nbsp;&nbsp;<span style='color:#FF9900;'>Posted On: </span>".$row[6]."</h2><h2 style='display:inline;margin-left:650px;color:grey;'><img src='images/cal.png' style='width:20px;height:25px;'>&nbsp;&nbsp;<span style='color:#FF9900;'>Last Date :</span>".$row[7]."</h2>";
     echo"<hr></div><br>";
     echo"<div style='height:560px;background-color:#F0FFF0;width:1200px;margin-left:150px;'>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Job Location :</span>".$row[3]."&nbsp;&nbsp;<img src='images/loc.png' style='width:20px;height:25px;'></h2>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Salary :</span>".$row[5]."</h2><br>";

     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Job Summary</span></h2><hr>";

     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Job Type :</span>".$row[9]."</h2><br>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Job Role :</span>".$row[10]."</h2><br>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Job Category &nbsp;:</span>".$row[11]."</h2><br>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Hiring Process :</span>".$row[12]."</h2><br>";
     echo"<h2 style='margin:10px;color:grey;'><span style='color:#FF9900;'>Who Can Apply :</span>".$row[13]."</h2><br><hr>";
     echo"<a href='apply.php?id=".$row[14]."&id2=".$row[15]."' style='text-decoration:none;'><button>Apply</button></a>";
     echo"</div>";
     
 	}
     ?>
 </div>