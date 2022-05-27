 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formcss.css">
    <title>Document</title>
        
</head>
<form method="POST">
<body>
<video autoplay muted loop id="myVideo">
        <source src="images/Ferris Wheel - 77563.mp4" type="video/mp4">
      </video>


    <h1> Sign Up </h1>
    <hr>
    <div class="form">
        <hr>
       <h1> <form action="login.php" method="post">
         <label for="fname">Name:</label>
         <input type="text" id="fname" name="fname"><br><br>
         <label for="contact">Contact no:</label>
         <input type="text" id="contact" name="contact"><br><br>
         <label for="email">Email Id:</label>
         <input type="text" id="email" name="email"><br><br>
         <label for="password">Password</label>
        <input type ="password" id="password" name ="password"><br>
        <input type ="submit" name ="sub" value="Submit"><br>
        
         </form>
       </h1>
    </div>
   
      <?php

$server = 'localhost:3307';
$username = 'root';
$password = "";


  $database='amusementpark';
 
  $con= new mysqli($server,$username,$password,$database);
 
  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error);
 
  }
if(isset($_POST['sub'])){

$Name=$_POST['fname'];
$Contact=$_POST['contact'];
$Email=$_POST['email'];
$password=$_POST['password'];
 $w ="INSERT INTO signin (Name,ContactNo,EmailID,Password) VALUES('".$Name."','".$Contact."','".$Email."','".$password."')";
 $result=$con->query($w);
 if($result==true){
  header("location: visitorlogin.php");
 }else{
   echo "Invalid data";
 }
 
 
}
 

?>
</body>
</form>
</html>    