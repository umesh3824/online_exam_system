<?php
include "config.php";

$indata=json_decode(file_get_contents("php://input"));
$qid= $indata->qid;
$result1 = mysqli_query($con,"SELECT * FROM quetion WHERE q_id='$qid'");
$row1 = mysqli_fetch_assoc($result1);
echo json_encode($row1);
?>