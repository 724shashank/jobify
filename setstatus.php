<?php
$user=$_REQUEST['id'];
$cuser=$_REQUEST['cuser'];
session_start();
$_SESSION['status']=$_REQUEST['stat'];
$status=$_SESSION['status'];
$con= mysqli_connect("127.0.0.1","root","","job_portal");
$q1="update applicant set status='$status' where email='$user' and cuser='$cuser'";
$res=mysqli_query($con,$q1);
if($res>0)
{
header("location:applicants.php");
}
?>