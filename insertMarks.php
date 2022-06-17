<?php
session_start();
include "config.php";
$sid=$_SESSION['uid'];
$result = mysqli_query($con,"SELECT * FROM tempdata as id where s_id='$sid'");
$row = mysqli_fetch_assoc($result);
$obMarks=0;
while($row!=null)
{
    $id=$row['q_id'];
    $resultq = mysqli_query($con,"SELECT answer FROM quetion WHERE q_id='$id'");
    $rowq = mysqli_fetch_assoc($resultq);

    if(strcmp($row['c_ans'],$rowq['answer'])==0)
    {
        $obMarks++;
    }

    $row = mysqli_fetch_assoc($result);
}
$q="INSERT INTO marksheet(s_id, obtain_marks) VALUES ('$sid','$obMarks')";
mysqli_query($con,$q);
$_SESSION['uid']=$_SESSION['-oo-oojhjb'];

?>