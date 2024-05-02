<?php include("adnav.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Video Courses</title>
	<style type="text/css">
		.div
		{
		background-color:white;
		width: 510px;
		height: 50px;
		border:1px solid black;	
		}
		.browse
		{
		color:white;
		float: right;
		font-size:20px;
		height:50px;
		border:1px solid black;
		border-radius:1px;
		background-color: #4C4A48;	
		font-family: Arial Black;
		}

		button
		{
			width:250px;
			height:60px;
			font-size:20px;
			font-family: Arial Black;
			float: center;
			margin-left:130px;
			background-color: #333;
			color:white;
		}
		
	</style>
</head>
<body>
<div style="background-color: white;width:700px;height:610px;margin-left:420px;margin-top:50px;font-family: Arial Black;">
<br>	
	<table style="margin-left:90px;"border="1">
		<form  method="Post" enctype="multipart/form-data">
			<tr><td style="height:100px;font-size:50px;text-align:center;background-color:#FF9900">Add-Videos</td></tr>
		<tr><td><div class="div">
				<span style="opacity:0.5;font-size:20px;font-family: Arial Black;float:left">Upload-Video</span>
					<input type="file" id=box style="display:none;" name="video">
					<label for=box class="browse">Browse</label>
					</div>
				</td></tr>
				<tr>
				<td colspan="2"><input type="text" placeholder="Video-Title"style="width:510px;height: 50px;font-size: 20pt;font-family: Arial Black;" required name="title"></td>
			</tr>
				<tr>
				<td colspan="2"><textarea type="text" placeholder="Discription"style="width:510px;height: 100px;font-size: 20pt;font-family: Arial Black;" required name="disc"></textarea></td>
			</tr>
			<tr><td style="height:50px;"></td></tr>
			<tr>
					<td><button type="submit" name="submit" value="submit">Submit</button>
					</td>
				</tr>
		</form>
		<tr><td style="height:50px;"></td></tr>
			<tr>
			<td colspan="2"><a href="videdit.php"><input type="submit" value="Edit/Delete Videos" style="width:250px;height:60px;font-size:20px;font-family: Arial Black;margin-left:6px;background-color: #333;color:white;"></a>
    		<a href="UploadVideo.php"><input type="submit" value="Uploaded-Video" style="width:250px;height:60px;font-size:20px;font-family: Arial Black;background-color: #333;color:white;"></a>
					</td>
				</tr>
					
	</table>
	<br>


</div>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
$filename=$_FILES["video"]["name"];
$tempname=$_FILES["video"]["tmp_name"];
$folder="video/".$filename;
move_uploaded_file($tempname,$folder);
$vid=rand(10,100);
$vtitle=$_REQUEST['title'];
$vdis=$_REQUEST['disc'];
$con=mysqli_connect("127.0.0.1","root","","job_portal");
$que="insert into videos(vid,vtitle,vdis,video) values ('$vid','$vtitle','$vdis','$folder')";
$res=mysqli_query($con,$que);
if($res>0)
{
	header('location:adminhome.php?Message=Video_Added');
}
}
?>