<?php
    session_start();
    include "config.php";
    //$arr= array();
    $qi_ans= array();
    $sid=$_SESSION['uid'];
    $result = mysqli_query($con,"SELECT * FROM tempdata as id where s_id='$sid'");
    $row = mysqli_fetch_array($result);
    $q=array(20);
    $i=0;
    $c=1;
   
    while($row!=null)
    {
        $qid=$row['q_id'];
        $result1 = mysqli_query($con,"SELECT * FROM quetion WHERE q_id='$qid'");
        $quetionDe = mysqli_fetch_array($result1);
        $q[$i]=(object)array('q_id'=>$row['q_id'],'qdec'=>$quetionDe['qdescription'],'qans'=>$row['c_ans'],'count'=>$c);
        $c++;
        $i++;
        $row = mysqli_fetch_array($result);
    }
    echo json_encode($q);
    
               
?>