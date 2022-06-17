<?php
session_start();
include "config.php";

$indata=json_decode(file_get_contents("php://input"));
$sid=$_SESSION['uid'];
$qid=$indata->qid;
$qans=$indata->qans;
$q="UPDATE tempdata SET c_ans='$qans' WHERE q_id='$qid' and s_id='$sid'";
$result=mysqli_query($con,$q);
?>