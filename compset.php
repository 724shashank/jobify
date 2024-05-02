<?php
$cuser=$_REQUEST['id'];
session_start();
$_SESSION['current']=$_REQUEST['stat'];
$current=$_SESSION['current'];
$con= mysqli_connect("127.0.0.1","root","","job_portal");
$q1="update regcmp set status='$current' where regcmp.email='$cuser'";
$res=mysqli_query($con,$q1);
if($res>0)
{
header("location:verifycomp.php");
}
?>
