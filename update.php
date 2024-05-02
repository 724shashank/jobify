<?php
       session_start();
        $user=$_SESSION['user'];
      	$jtitle=$_REQUEST['jtitle'];
        $jloc=$_REQUEST['jloc'];
        $eligi=$_REQUEST['jele'];
        $sal=$_REQUEST['jsal'];
        $jlast=$_REQUEST['jlast'];
        $jid=$_REQUEST['jid'];
        $jdis=$_REQUEST['jdis'];
    $con=mysqli_connect("127.0.0.1","root","","job_portal");  
    $query1="update jobs set jtitle='$jtitle',jloc='$jloc',eligi='$eligi',salary='$sal',last='$jlast',jid='$jid',disc='$jdis' where  user='$user'";
    $res=mysqli_query($con,$query1);
        if($res>0)
        {
            header("location:comphome.php?msg=Job updated");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }
    
    ?>