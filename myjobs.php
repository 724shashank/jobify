<?php include("cnav.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>My-Jobs</title>
  <style type="text/css">
          .div1
       {
        width:1030px;
        height:500px;
        background-color:mistyrose;
        margin-left:260px;
        margin-top: 40px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px;
    }
    button
{
  width:100px;
  height:50px;
  background-color: #333;
  color:white;
  font-size:15px;
 

}

  </style>
</head>
<body>

<div class="div1"  style="overflow-y:scroll;">
<table border="1px" width="1010" >
        <tr><td colspan="7" style="text-align: center;background-color:#FF9900;height:50px;font-family:Arial Black;font-size:30pt;">Applicants</td></tr>
        <tr style="background-color:#333;color: white;text-align: center;font-size:15pt;">
            <td>Job-ID</td>
            <td>Position</td>
            <td>Location</td>
            <td>Salary</td>
            <td>Posted-On</td>
            <td>Last-Date</td>
            <td>Edit</td>
         
            
        </tr>

   
<?php

      $con=mysqli_connect("127.0.0.1","root","","job_portal");
      $q1="select regcmp.logo,jobs.jid,jobs.jtitle,jobs.jloc,jobs.salary,jobs.eligi,jobs.post,jobs.last,jobs.disc from regcmp,jobs where jobs.user='$cuser' AND regcmp.email='$cuser'";
      $res=mysqli_query($con,$q1);
      while($row=mysqli_fetch_array($res))
      {
        $jid=$row[1];
        $jpos=$row[2];
        $jloc=$row[3];
        $jsal=$row[4];
        $jpost=$row[6];
        $jlast=$row[7];
        $edit="Edit";
echo"<tr><td>".$jid."</td><td>".$jpos."</td><td>".$jloc."</td><td>".$jsal."</td><td>".$jpost."</td><td>".$jlast."</td><td><a style='text-decoration:none;color:blue;' href='delete.php'>$edit</td></tr>";
      }
    ?>
 
  </table></div>

    <div class="footer" style="margin-top:25px;"> 
  <h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>