<?php
        session_start();
        $vid=$_SESSION['id'];
        $title=$_REQUEST['title'];
      	$disc=$_REQUEST['disc'];
		
    $con=mysqli_connect("127.0.0.1","root","","job_portal");  
    $query1="update videos set vtitle='$title',vdis='$disc'where vid='$vid'";
    $res=mysqli_query($con,$query1);
        if($res>0)
        {
            header("location:adminhome.php?msg=Video_updated");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }
    
    ?>