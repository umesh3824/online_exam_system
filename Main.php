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
    <!-- Angular Jssss-------------->
    <script src="css\angular.min.js"></script>
  <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="gpjlogo.png" rel="shortcut icon" type="image/png"> 
    		<!--===============================================================================================-->	
		<link href="gpjlogo.png" rel="shortcut icon" type="image/png">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="CSS\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="CSS\util.css">
		<link rel="stylesheet" type="text/css" href="CSS\main.css">
       <!--===============================================================================================-->
       <style>
         button{border:solid black 2px;
          background-color: #154360;
          border-radius:5px;
          color:white;}
         table{
           width: 80%;
           
         }
          td{
              padding: 30px;
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
  <body ng-app="myApp" ng-controller="myCtrl">
    <div style="padding: 15px;">
    <div class="card shadow-lg p-2" style="background-color:#154360;margin-left: 0%;margin-right: 0%;border-bottom-right-radius: 0; border-bottom-left-radius: 0">
      <div class="row text-center" style="color: #ffffff">
        <div class="col-lg-3">
          <img src="gpjlogo.png" alt="Logo" width="70" height="70" align="middle" style="margin: 5px">
          <br><b>DTE Code :</b>5008
	        <br><b>MSBTE Code :</b>0018/1567
        </div>
        <div class="col-lg-5 align-self-center justify-content-center" style="vertical-align: middle">
          <h1> Government Polytechnic, Jalgaon</h1>
          <p  style="color:#DCF1FF;">(An Institute of Government Of Maharashtra)<br>Since 1960</p>
        </div>
        <div class="col-lg-4 " style="vertical-align: middle;">
          <div>
              <span id="countdown" class="timer" style="text-align: right;"></span>
          </div>
          <div style="padding-top:20px;">
              <h2 style="float: right;margin-top:10px;">Name :- <?php echo $_SESSION['uname']; ?></h2> 
          </div>
           
        </div> 
      </div>
    </div> 
 </div> 
  </div>
  <center>
    <!-- Main Quetion -->
    <div style="padding: 20px;">
        <table id="table1" style="padding: 10px; box-shadow: 2px 4px 7px 5px #dcdcdc; overflow: hidden;padding: 5px;margin: 1px 0; border-radius: 5px;">
            <tr>
                <th colspan="2" id="hd"><h2>Q{{countq+".&nbsp &nbsp &nbsp"}}{{quetion.qdescription}}</h2></th>
            </tr>
            <tr>
                <td><input type="radio" name="ans" ng-model="ans" value="{{quetion.A}}">  {{quetion.A}}</td>
                <td><input type="radio" name="ans" ng-model="ans" value="{{quetion.B}}">  {{quetion.B}}</td>
            </tr>
            <tr>
                <td><input type="radio" name="ans" ng-model="ans" value="{{quetion.C}}">  {{quetion.C}}</td>
                <td><input type="radio" name="ans" ng-model="ans" value="{{quetion.D}}">  {{quetion.D}}</td>
            </tr>
            
            <tr>
                <th colspan="2" style="padding: 5% 40% 5% 40%;">
                    <div class="container-login100-form-btn" style="margin-bottom: 20px;">
                    <input type="submit" class="login100-form-btn" ng-click="nextq()" value="Next">
                </th>
            </tr>
    </table>
  </div>
         

  <!-- Summary Quetion -->
  <div id="table2" style="padding: 20px;  display:none;">
                    <table  style="padding: 10px; width: 60%; box-shadow: 2px 4px 7px 5px #dcdcdc; overflow: hidden;padding: 5px;margin: 1px 0; border-radius: 5px;" >
                        <tr>
                            <th colspan="4" id="hd"><h2>Question Summary</h2></th>
                        </tr>
                        <tr>
                            <th>Q. No.</td>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Update</th>
                        </tr>
                        <ul>
                            <tr ng-repeat="q in phpData1">
                                <td>{{q.count}}</td>
                                <td>{{q.qdec}} </td>
                                <td>{{q.qans}}</td>
                                <td><button ng-click="updateQuetion(q)"> Change</button></td>
                            </tr> 
                        </ul>
                        <tr>
                            <th colspan="4" style="padding: 5% 40% 5% 40%;">
                                <div class="container-login100-form-btn" style="margin-bottom: 20px;">
                                <input type="submit" class="login100-form-btn" ng-click="insertResult()" value="Submit">
                            </th>
                        </tr>
                    </table>
                </div>

       <!-- Update Quetion -->
  <div id="table3" style="padding: 20px; display:none;">
        <table style="padding: 10px; box-shadow: 2px 4px 7px 5px #dcdcdc; overflow: hidden;padding: 5px;margin: 1px 0; border-radius: 5px;">
            <tr>
                <th colspan="2" id="hd"><h2>Q{{count+".&nbsp &nbsp &nbsp"}}{{quetionUpdate.qdescription}}</h2></th>
            </tr>
            <tr>
                <td><input type="radio" name="ans1" ng-model="ans1" value="{{quetionUpdate.A}}">  {{quetionUpdate.A}}</td>
                <td><input type="radio" name="ans1" ng-model="ans1" value="{{quetionUpdate.B}}">  {{quetionUpdate.B}}</td>
            </tr>
            <tr>
                <td><input type="radio" name="ans1" ng-model="ans1" value="{{quetionUpdate.C}}">  {{quetionUpdate.C}}</td>
                <td><input type="radio" name="ans1" ng-model="ans1" value="{{quetionUpdate.D}}">  {{quetionUpdate.D}}</td>
            </tr>
            
            <tr>
                <th colspan="2" style="padding: 5% 40% 5% 40%;">
                    <div class="container-login100-form-btn" style="margin-bottom: 20px;">
                    <input type="submit" class="login100-form-btn" ng-click="updateTemp(quetionUpdate)" value="Submit">
                </th>
            </tr>
    </table>
  </div>
  </center>
 
    <script>
        var seconds = 3600;
        function timer(){
        var min = Math.round((seconds -30) / 60);
        var sec = seconds % 60;
        if(sec<10)
        {
          sec = "0" + sec;
        }
        document.getElementById("countdown").innerHTML = " <h1>" + min + ":" + sec + "</h1>";
  
        if(seconds == 0)
        {
        clearInterval(CountDownTimer);
        document.getElementById("countdown").innerHTML = "Time Over";
        }
        else
        {
          seconds--;
        }
      }
      var CountDownTimer = setInterval('timer()',1000);

    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
    $scope.countq=0;
    $http.get("getQ.php")
        .then(function(response) {
        $scope.phpData = response.data;
        $scope.quetion=$scope.phpData[$scope.countq];
        $scope.countq++;
        });
    $http.get("deleteQ.php")
        .then(function(response) {
        $scope.deleteData = response.data;
       
        });
   
    $scope.nextq=function(){
      $http.post("uploadPaper.php",{qid:$scope.quetion.q_id,qans:$scope.ans})
                    .then(function(rdesponse) {
                     $scope.myWelcome1 = rdesponse.data;});

                     
        if($scope.countq<20){
          
                     
        $scope.ans="";          
        $scope.quetion=$scope.phpData[$scope.countq];
        $scope.countq++;
         
        }
        else{
          
        document.getElementById("table1").style.display='none';
          document.getElementById("table2").style.display='block';                    
          $http.get("getTempData.php").then(function(response) {
              $scope.phpData1 = response.data;           
          });
        }

    }

    $scope.updateQuetion=function(q){
      document.getElementById("table1").style.display='none';
      document.getElementById("table2").style.display='none';
      document.getElementById("table3").style.display='block';
      $http.post("fetchQuetion.php",{qid:q.q_id})
                    .then(function(rdesponse) {
                     $scope.quetionUpdate = rdesponse.data;});
      $scope.count=q.count;    
      

    }
  
     
      $scope.updateTemp=function(quetionUpdate){
      document.getElementById("table1").style.display='none';
      document.getElementById("table2").style.display='block';
      document.getElementById("table3").style.display='none';
      $http.post("updateQuestion.php",{qid:$scope.quetionUpdate.q_id,qans:$scope.ans1})
                    .then(function(rdesponse) {
                     $scope.myWelcome2 = rdesponse.data;});
                     $http.get("getTempData.php").then(function(response) {
              $scope.phpData1 = response.data;           
          });
          $http.get("getTempData.php").then(function(response) {
              $scope.phpData1 = response.data;           
          });
        $scope.ans1="";              
                     

    } 

    $scope.insertResult=function(){
      document.getElementById("table1").style.display='none';
      document.getElementById("table2").style.display='none';
      document.getElementById("table3").style.display='none';
      $http.post("insertMarks.php",{})
                    .then(function(rdesponse) {
                     $scope.myWelcome3 = rdesponse.data;});

      alert("successfully completed your exam");
      window.open("Login.php","_self");
    }         

});
</script>
  </body>
</html>