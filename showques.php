<?php include("adnav.php")?>
<!DOCTYPE html>
<html>
<head>
<title>Question List</title>
</head>
<body>
    <div class="div1"  style="width:1500px;height:500px; overflow:auto;background-color:white;font-family:Arial Black;margin-top: 30px;margin-left:10px;">

    <table border="1" width="1500" cellspacing="0px" cellpadding="5px">
        <tr><td colspan="7" style="text-align: center;height:100px;font-size:50pt;background-color:#FF9900">Question-List</td></tr>
        <tr style="background-color:#333;color:white;">
            <td>Question-ID</td>
            <td>Question</td>
            <td>Option-1</td>
            <td>Option-2</td>
            <td>Option-3</td>
            <td>Option-4</td>
            <td>Answer</td>
        </tr>

<?php
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$query="select * from question ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><tr>";
}
?>        

</table>
</div>
<div class="footer" style="margin-top:30px;"> 
<h1>Online Job Portal&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
