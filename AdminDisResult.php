<?php

include "config.php";
    $arr= array(); 
    $result = mysqli_query($con,"SELECT * FROM marksheet");
    $row = mysqli_fetch_array($result);        

    $i=0;
    while($row!=null)
    {
        $no=$row["s_id"];
        $result1 = mysqli_query($con,"SELECT s_name FROM studentdata WHERE s_id='$no'");
        $std = mysqli_fetch_array($result1);
        $q[$i]=(object)array('s_id'=>$row['s_id'],'s_name'=>$std['s_name'],'o_f_m'=>$row['out_of_marks'],'o_b_m'=>$row['obtain_marks']);
        $i++;
        $row = mysqli_fetch_array($result);
    }
    echo json_encode($q);

?>