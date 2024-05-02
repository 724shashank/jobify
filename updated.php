<?php
        session_start();
        $qid=$_SESSION['qid'];
        $ques=$_REQUEST['ques'];
      	$opt1=$_REQUEST['opt1'];
		$opt2=$_REQUEST['opt2'];
		$opt3=$_REQUEST['opt3'];
        $opt4=$_REQUEST['opt4'];
        $ans=$_REQUEST['crrct'];
    $con=mysqli_connect("127.0.0.1","root","","job_portal");  
    $query1="update question set ques='$ques',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',corrct='$ans' where qid='$qid'";
    $res=mysqli_query($con,$query1);
        if($res>0)
        {
            header("location:adminhome.php?msg=Question_updated");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }
    
    ?>