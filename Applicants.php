<?php include("cnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Applicants</title>
	<style type="text/css">
			.div1
       {
        width:1030px;
        height:500px;
        background-color:mistyrose;
        margin-left:260px;
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px;
    }
	</style>
</head>
<body>
<div class="div1"  style="overflow-y:scroll;">
<table border="1px" width="1010" >
        <tr><td colspan="7" style="text-align: center;background-color:#FF9900;height:50px;font-family:Arial Black;font-size:30pt;">Applicants</td></tr>
        <tr style="background-color:#333;color: white;text-align: center;font-size:15pt;">
            <td>Username</td>
            <td>Name</td>
            <td>Job-Title</td>
            <td>Job-Type</td>
            <td>Resume</td>
            <td>Current-Status</td>
            <td>Set-Status</td>
         
            
        </tr>

        <?php
        
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$query="select applicant.email,applicant.name,jobs.jtitle,jobs.jtype,applicant.resume,applicant.status,applicant.cuser from applicant,jobs where applicant.cuser='$cuser' and jobs.jid=applicant.jobid ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
        $user=$row[0];
        $name=$row[1];
        $jtitle=$row[2];
        $jtype=$row[3];
        $resume=$row[4];
        $status=$row[5];
        $cuser=$row[6];
echo"<tr><td>".$user."</td><td>".$name."</td><td>".$jtitle."</td><td>".$jtype."</td><td><a href=".$resume." target=blank style='text-decoration:none;color:blue;'>Resume</a></td><td>".$status."</td>";
if($status == "Waiting")
            {
                $str = "Under_Process";
            }
            else if($status == "Under_Process")
            {
                $str = "Waiting";
            }
            else
            {
                $str = "Under_Process";
            }   
            echo "<td><a style='text-decoration:none;color:blue;' href='setstatus.php?id=".$user."&stat=".$str."&cuser=".$cuser."'>".$str."</a></td>";
            echo "</tr>";


            }

            ?>
</body>
</html>