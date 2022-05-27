<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formcss.css">
    <title>Amusement Park</title>
</head>
<body>
<video autoplay muted loop id="myVideo">
        <source src="images/Ferris Wheel - 77563.mp4" type="video/mp4">
      </video>
      
    <div class="title">
      
        <h1 id="title"><span>Login</span></h1>
        
    </div>
   
    <div class="form">
        <hr>
       <h1> <form action="visitorlogin.php" method="post">
         <label for="fname">Username:</label>
         <input type="text" id="fname" name="fname"><br><br>
         <label for="Password">Password:</label>
         <input type="Password" id="Password" name="Password"><br><br>
        <input type ="submit" id="Submit" name="Submit">
         
         </form>
       </h1>
    </div>
    <?php
if(isset($_POST['Submit'])){
  $server = 'localhost:3307';
  $username = 'root';
  $password = "";
 
  $database='amusementpark';
 
  $con= new mysqli ($server,$username,$password,$database);
  $Name=$_POST['fname'];
  $hashed_password=$_POST['Password'];
  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error);
 
  }
else{
  

     
      $query2 = "SELECT `Password` FROM `SignIn` WHERE `Name`='$Name' and `Password`='$hashed_password'";
      $result2 = mysqli_query($con,$query2);
      
      
      if (mysqli_num_rows($result2) >0) {
        header("location: index1.html");
}
else
{
    die(mysqli_error($con));
  }
}
}
?>
 
</body>
</html>