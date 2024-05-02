<?php include("unav.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <style type="text/css">
        body
        {
        background-color:#232F3E;
        }
    </style>
</head>
<body>
	
        <div style="width:700px;height:750px;background-color:white;color:black;margin-left:420px;overflow-y:auto;">
<form action="jobquiz.php" method="POST">
<table style="width:700px;color: black;border-bottom-color: black;">
<tr><td colspan='3' style='text-align: center;height:50px;color:black;background-color:#FF9900;font-family: Arial Black;
  font-size: 25pt; '>Quiz-Mania</td></tr>
  <?php
  $con=mysqli_connect("127.0.0.1","root","","job_portal");
  $sql="select * from  result where sid='$user' ";
        $res=mysqli_query($con,$sql);
        if($row=mysqli_fetch_array($res))
        {
        	header('location:result.php?info=You Have Already Tested Your Skill');
       
        }
        else
        {
  $q="select * from question";
  $res=mysqli_query($con,$q);
   $count=0;
 
  while($row=mysqli_fetch_array($res))
  {
  $qid=$row[0];
  $ques=$row[1];
  $opt1=$row[2];
  $opt2=$row[3];
  $opt3=$row[4];
  $opt4=$row[5];
 
echo"<input type=hidden name=qid".++$count." value=".$qid.">";
echo"<tr><td colspan=2 ><b>Ques".$count." :</b>&nbsp;".$ques."</td></tr>";
echo"<tr ><td bgcolor='lightgrey'style='width:345px;'><input type=radio name=ans".$count." value='".$opt1."'>".$opt1."</td><td bgcolor='lightgrey'><input type=radio name=ans".$count." value='".$opt2."'>".$opt2."</td></tr>";
echo"<tr ><td bgcolor='lightgrey'style='width:345px;'><input type=radio name=ans".$count." value='".$opt3."'>".$opt3."</td><td bgcolor='lightgrey'><input type=radio name=ans".$count." value='".$opt4."'>".$opt4."</td></tr>";

if($count==10)
    	break;
}

echo"</table><hr>
<div style='background-color:#333;margin-bottom: 20px;'>
<input type='Submit' name='submit' placeholder='Submit' style='width:150px;height:40px;font-family: Arial Black;
  font-size: 15pt;margin-left:170px;background-color:#FF9900;margin-top:20px;'><input type='reset' placeholder='Reset'style='width:150px;height:40px;font-family: Arial Black;font-size: 15pt;margin-left:40px;margin-bottom:20px;background-color:#FF9900;'></div>";
  
}
?>

</form>
</div>
<div class="footer" style="margin-top:30px;"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>