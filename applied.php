<?php include("unav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Applied-Jobs</title>
	<style type="text/css">
		.div1
       {
        width:1015px;
        height:500px;
        background-color:white;
        margin-left:260px;
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
	</style>
</head>
<body>
<div class="div1"  style="overflow-y:scroll;">


        <table border="1px" width="995" >
        <tr><td colspan="6" style="text-align: center;background-color:#FF9900;height:50px;font-family:Arial Black;font-size:30pt;">Applied Jobs</td></tr>
        <tr style="background-color:#333;color: white;text-align: center;font-size:15pt;">
            <td>Company</td>
            <td>Job-Title</td>
            <td>Location</td>
            <td>Job-Type</td>
            <td>Job-Salary</td>
            <td>Job-Status</td>
         
            
        </tr>

        <?php

       
        
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q="select jobs.jtitle,jobs.jloc,jobs.jtype,jobs.salary,applicant.status,applicant.email,applicant.jobid,regcmp.oname from jobs,applicant,regcmp where applicant.email='$user' and jobs.jid=applicant.jobid and regcmp.email=jobs.user";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
        $title=$row[0];
        $loc=$row[1];
        $jtype=$row[2];
        $sal=$row[3];
        $status=$row[4];
        $cname=$row[7];
        
echo"<tr><td style='text-align: center;'>".$cname."</td><td style='text-align: center;'>".$title."</td><td style='text-align: center;'>".$loc."</td><td style='text-align: center;'>".$jtype."</td><td style='text-align: center;'>".$sal."</td><td style='text-align: center;'>".$status."</td></tr>";

}

            ?>
            </table>
            </div>
            <div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
            </body>
            </html>        

