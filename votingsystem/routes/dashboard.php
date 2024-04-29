<?php
session_start();
if (!isset($_SESSION['userdata'] )) {
  header("location: ../ ");
}
$userdata=$_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata']
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Voting System- Dashboard</title>
  <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
  <style>
    #backbtn{
      padding: 10px;
      border-radius: 5px;
      font-size: 15px;
      background-color: aquamarine;
      float:left;
    }
    #logoutbtn{
      padding: 10px;
      border-radius: 5px;
      font-size: 15px;
      background-color: aquamarine;
      float:right;
    }
    #profile{
      background-color:white;
      width:30%;
      padding:20px;
      float:left;
    }
    #group{
      background-color:white;
      width:60%;
      padding:20px;
      float:right;
    }
  </style>
  <div id="mainsection">
    <center>
    <div id="headersection">
      <button id="backbtn">Back</button>
      <button  id="logoutbtn">LogOut</button>
      <h1>Online Voting System</h1>
    </div>
    </center>
    <hr>
    <div id="profile">
      <img src="../uploads/<?php echo $userdata['photo']?>" >
      <b>Name: </b><?php echo $userdata['name']?> <br><br>
      <b>Mobile: </b><?php echo $userdata['mobile']?> <br><br>
      <b>Address: </b><?php echo $userdata['address']?> <br><br>
      <b>Status: </b><?php echo $userdata['status']?> <br><br>
    </div>
    <div id="group">
      <?php
        if($_SESSION['userdata']){
          for($i=0;$i<count($groupsdata);$i++){
            ?>
            <div>
              <b>Group name: </b>
              <b>Votes</b>
            </div>

            <?php
          }

        }
        else{

        }
      
      ?>
    </div>
  </div>
  
  
  
  
</body>
</html>
