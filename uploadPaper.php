<?php
session_start();
include "config.php";

$indata=json_decode(file_get_contents("php://input"));
$sid=$_SESSION['uid'];
$qid=$indata->qid;
$qans=$indata->qans;
$q="INSERT INTO tempdata(s_id,q_id,c_ans) VALUES ('$sid','$qid','$qans')";
$result=mysqli_query($con,$q);

?>