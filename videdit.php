<?php include('adnav.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		.card2
		{
		 background-color:white;
  		 padding: 20px;
  		 margin-top:150px;
  		 width:600px;
  		}
	</style>
</head>
<body>

<center><div class="card2">
<form action="videditconf.php" method="POST">
<table style="font-family:Arial Black;">
	<tr><td colspan="3" style="text-align: center;background-color:#FF9900;font-family:Arial Black;font-size:30pt;">Edit/ Delete</td></tr>
<tr><td><h3>Enter Video ID:&nbsp;&nbsp;</h3></td><td><input type="number" name="id" class="input" style="width:250px;height: 30px;"></td></tr>
<tr ><td><h3>Choose Operation:</h3></td>
<td>Edit<input type="radio" name="opr" value="edit"></td>
<td>Delete<input type="radio" name="opr" value="delete"></td>
</tr>
<tr><td><button name="submit" style="width:100px;height:50px;background-color:#333;font-family:Arial Black;color:white;">Submit</button></td></tr>
</table>
</form>
</div></center>

<div class="footer" style="margin-top:180px;"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div></body></html>


