<?php
session_start();
include "config.php";
if(isset($_SESSION['uid']))
{

}
else
header("location:Login.php");
?>
<html>
  <head>
    <title>GPJ Online Exam Portal</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="gpjlogo.png" rel="shortcut icon" type="image/png"> 
    <link rel="shortcut icon" href="images/logo.png" type="image/jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="gpjlogo.png" rel="shortcut icon" type="image/png">
    <meta charset="UTF-8">
		<!--===============================================================================================-->	
		<link href="gpjlogo.png" rel="shortcut icon" type="image/png">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="CSS\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="CSS\util.css">
		<link rel="stylesheet" type="text/css" href="CSS\main.css">
       <!--===============================================================================================-->
       <style>
           td{
               padding: 10px;
           }
           #hd{
               padding: 10px;
               text-align: center;
               font-size: 20px;
               background-color: #154360;
               color: #ffffff;
           }
       </style>
  </head>
  <body>
    <div style="padding: 15px;">
    <div class="card shadow-lg p-2" style="background-color:#154360;margin-left: 0%;margin-right: 0%;border-bottom-right-radius: 0; border-bottom-left-radius: 0">
      <div class="row text-center" style="color: #ffffff">
        <div class="col-lg-3">
          <img src="gpjlogo.png" alt="Logo" width="70" height="70" align="middle" style="margin: 5px">
          <br><b>DTE Code :</b>5008
	        <br><b>MSBTE Code :</b>0018/1567
        </div>
        <div class="col-lg-9 align-self-center justify-content-center" style="vertical-align: middle">
          <h1> Government Polytechnic, Jalgaon</h1>
          <p  style="color:#DCF1FF;">(An Institute of Government Of Maharashtra)<br>Since 1960</p>
        </div> 
      </div>
    </div>
    </div>
					<center>
                            <div style="padding: 20px;">
                        <table style="padding: 10px; box-shadow: 2px 4px 7px 5px #dcdcdc; overflow: hidden;padding: 10px;margin: 10px 0; border-radius: 5px;">
                            <tr>
                                <th colspan="2" id="hd"><h2>Welcome</h2> </th>
                            </tr>
                            <tr>
                                <td> Name </td>
                                <td> <?php echo $_SESSION['uname']; ?></td>
                            </tr>
                            <tr>
                                <td>Enrollment Number</td>
                                <td><?php echo $_SESSION['uid']; ?></td>
                            </tr>
                            <tr>
                                <td>Subject Name</td>
                                <td>Advanced Java</td>
                            </tr>
                            <tr>
                                <td>Subject Code </td>
                                <td>22517</td>
                            </tr>
                            <tr>
                                <td>Time </td>
                                <td>1 Hours</td>
                            </tr>
                            <tr>
                                <th colspan="2" style="padding: 10% 20% 10% 20%;">
                                    <div class="container-login100-form-btn" style="margin-bottom: 20px;">
                                    <input type="submit" value="Start Exam" class="login100-form-btn" onclick="window.location='Main.php';">
                                </th>
                            </tr>
							
                    </table>
                </div>
					</center>	
			  
    </body>
</html>