<?php

include "config.php";
    $arr= array(); 
    $result = mysqli_query($con,"SELECT MAX(q_id) As id FROM quetion");
    $row = mysqli_fetch_array($result);        
    $no=$row["id"];
    
    $arr=[];
    $n=rand(1,$no);
    while(count($arr)<20) 
    {            
        $done=true;
        $result1 = mysqli_query($con,"SELECT * FROM quetion WHERE q_id='$n'");
        $row1 = mysqli_fetch_assoc($result1);
        if($row1!=null)
        {
            $arr[]=$row1;
        }  
       
        while($done)
        {
            $n=rand(1,$no);
            for($i=0;$i<count($arr);$i++)
            {
                $quetion=$arr[$i];
                if($n==$quetion['q_id'])
                    break;
            }
            if($i==count($arr))
                $done=false;
        }
    }
 
    echo json_encode($arr);
?>