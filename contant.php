<?php include("hnav.php")?>
<br><br>
<div >
      <div style="height:800px;background-color:#F0FFF0;width:100%;">

      <?php
      
      $id=$_REQUEST['id'];
      $con=mysqli_connect("127.0.0.1","root","","job_portal");
      $q1="select * from regcmp where email='$id'";
      $res=mysqli_query($con,$q1);
      $row=mysqli_fetch_array($res);
      
     echo "<center><img src='".$row[9]."' style='width:1410px;height:300px;margin-top:30px;'></center><br>";
     echo"<img src='images/iso.png'style='width:400px;height:400px;float:right;margin-right:50px;'>";
     echo"<b style='font-family: Arial Black;font-size:40px;margin-left:55px;'><u>Company Name:</u>&nbsp".$row[0]."</b><br><br>";
     echo"<b style='font-family: Arial Black;font-size:40px;margin-left:55px;'><u>Address:</u>&nbsp;".$row[1].",".$row[4].",".$row[5].",".$row[3]."</b><br><br>";
     echo"<b style='font-family: Arial Black;font-size:40px;margin-left:55px;'><u>Contact:</u>&nbsp".$row[6]."</b><br><br>";
   	 echo"<b style='font-family: Arial Black;font-size:40px;margin-left:55px;'><u>Mail:</u>&nbsp".$row[11]."</b><br><br>";
   	 echo"<b style='font-family: Arial Black;font-size:40px;margin-left:55px;'><u>Website:</u>&nbsp<a href='' style='text-decoration:none;'>".$row[2]."</a></b><br><br>";
   	echo"<b style='font-family: Arial Black;font-size:40px;margin-left:55px;'><u>Certification:</u>&nbsp".$row[7]."</b><br><br>";
	  ?>
	   <div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
	  </div>
	  </div>







	  