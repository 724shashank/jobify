<?php include("adnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Question</title>
</head>
<body>
	<form method="POST">
<div style="background-color:white;width:500px;height:580px;margin-left:515px;margin-top:25px;">
	<table>
		<tr><td style="text-align: center;width:500px;background-color:#FF9900;margin-left: 140px;font-size:30px;font-family:Arial Black;">Add-Question</td></tr>
	</table>
	<input type="text" name="qid" style="width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;" placeholder="Question-ID">
	<input type="text" name="ques" style="width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;" placeholder="Question">
	<input type="text" name="opt1" style="width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;"placeholder="Option 1">
	<input type="text" name="opt2" style="width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;" placeholder="Option 2">
	<input type="text" name="opt3" style="width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;"placeholder="Option 3">
	<input type="text" name="opt4" style="width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;"placeholder="Option 4">
	<input type="text" name="crrct" style="width:450px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;"placeholder="Correct Answer">
	<input type="submit" name="submit" style="width:225px;height:50px;margin-top:10px;margin-left:20px;font-family:Arial Black;font-size:15pt;background-color:#333;color:white;"><input type="reset" style="width:225px;height:50px;margin-top:10px;margin-left:10px;font-family:Arial Black;font-size:15pt;background-color:#333;color:white;">
	
</div>
</form>
<div style="background-color:white;width:500px;height:70px;margin-left:515px;margin-top:10px;">
	<a href="showques.php"><input type="button"style="width:240px;height:50px;font-family:Arial Black;font-size:15pt;background-color:#333;color:white;color:white;margin-left:130px;margin-top:10px;" value="Show-Questions"></a>
</div>
	<div style="background-color:white;width:500px;height:70px;margin-left:515px;margin-top:10px;">
	<a href="edit.php"><input type="button"style="width:240px;height:50px;font-family:Arial Black;font-size:15pt;background-color:#333;color:white;color:white;margin-left:130px;margin-top:10px;" value="Edit/Delete Question"></a>
</div>
<div class="footer"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
<?php
if(isset($_REQUEST["submit"]))
{
$quesid=$_REQUEST['qid'];
$ques=$_REQUEST['ques'];
$opt1=$_REQUEST['opt1'];
$opt2=$_REQUEST['opt2'];
$opt3=$_REQUEST['opt3'];
$opt4=$_REQUEST['opt4'];
$ans=$_REQUEST['crrct'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$q="insert into question(qid,ques,opt1,opt2,opt3,opt4,corrct)values('$quesid','$ques','$opt1','$opt2','$opt3','$opt4','$ans')";
$res=mysqli_query($con,$q);
if($res>0)
        {
            header("location:Adminhome.php?msg=Question Added");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }
    }
?>