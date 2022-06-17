<?php
session_start();
include "config.php";
?>
<html lang="en">
	<head>
		<title>GPJ Online Exam Portal</title>
		<meta charset="UTF-8">
		<!--===============================================================================================-->	
		<link href="gpjlogo.png" rel="shortcut icon" type="image/png">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="CSS/main.css">
		<link rel="stylesheet" type="text/css" href="CSS/util.css">
       <!--===============================================================================================-->
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
        <center>
			<div style="width: 300px;">
            <form style="margin-top: 5%;" class="login100-form resq-login ng-valid ng-dirty ng-valid-parse" method="POST">                      
                <span class="login100-form-title">
                    <img class="img-center" src="gpjlogo.png" alt="IMG">
                </span>
                    
                <div class="wrap-input100 validate-input" id="inputUserNameDiv">
                    <input class="input100 ng-valid ng-touched ng-not-empty ng-dirty ng-valid-parse" type="text" name="enroll" placeholder="Enrollemnt No" ng-model="inputUserName" id="inputUserName" autofocus="">            
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100 ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" type="password" name="pass" placeholder="Password" ng-model="inputPassword" id="inputPassword">
                    <span class="symbol-input100 right">
                    </span>
                </div>
                        
                <div class="container-login100-form-btn" style="padding: 10px 10px 20px 10px;">
                    <input type="submit" class="login100-form-btn" name="sub" value="Login">
                </div>

                   
			</form>
		</div>
        </center>
    </body>
</html>
<?php  
	
	if(isset($_POST["sub"]))
	{
        $id=$_POST["enroll"];
        $pass=$_POST["pass"];
        if($id=="0018" && $pass=="0018"){
            header("location:AdminHome.html");
        }
             
        $q="SELECT * FROM studentdata WHERE s_id='$id' and s_pass='$pass'";
        $result=mysqli_query($con,$q);
        $data=mysqli_fetch_assoc($result);
        if(isset($data))
        {
            $q1="SELECT * FROM marksheet WHERE s_id='$id'";
            $result1=mysqli_query($con,$q1);
            $data1=mysqli_fetch_assoc($result1);
            if(isset($data1))
            {
                echo "<html><body><script>alert('You Have Alerady Gives The Exam!!!!!');</script></body></html>";

            }
            else{
            $_SESSION['uid']=$data['s_id'];
            $_SESSION['uname']=$data['s_name'];
             header("location:Welcome.php");
            }
        }
        else
        {
            echo "<html><body><script>alert('Plz Enter Correct Information');</script></body></html>";
		}
	}
?>