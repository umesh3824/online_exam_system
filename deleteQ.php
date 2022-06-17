<?php
session_start();
include "config.php";

$sid=$_SESSION['uid'];

$q1="DELETE FROM tempdata WHERE s_id='$sid'";
$result1=mysqli_query($con,$q1);

?>
