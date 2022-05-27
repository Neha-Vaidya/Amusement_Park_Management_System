 
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

<div class="title">
       
    <h1> Book Now </h1>
    <hr>
    <div class="form">
        <hr>
       <h1> <form action="booknow.php" method="post">
         <label for="fname">Name:</label>
         <input type="text" id="fname" name="fname"><br><br>
         <label for="pass">Password:</label>
         <input type="password" id="pass" name="pass"><br><br>
         <label for="phno">Phone No:</label>
         <input type="text" id="phno" name="phno"><br><br>
         <label for="Date">Date</label>
         <input type ="date" id="date" name ="date"><br><br>
         <label>Parks</label>
              <select name="parks" id="parks">
                <option> </option>
                <option value="Adventure Park">Adventure Park</option>
                <option value="Trampolin Park">Trampolin Park</option>
                <option value="Water Park">Water Park</option>
                <option value="Snow Park">Snow Park</option>>
              </select>
         <label for="NoOfPeople">No Of People:</label>
         <input type="text" id="NoOfPeople" name="NoOfPeople"><br><br>
        
        <input type ="submit" name ="sub"><br>
         </form>
       </h1>
    </div>
    <span> <div class="btn">
            <a href="index1.html">Home</a> 
         </div>
        </span>
      <?php
if(isset($_POST['sub'])){
  $server = 'localhost:3307';
  $username = 'root';
  $password = "";
 

  $database='amusementpark';
 
  $con= new mysqli ($server,$username,$password,$database);
 
  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error);
 
  }
else{
$Name=$_POST['fname'];
$Contact=$_POST['phno'];
$date=$_POST['date'];
$password=$_POST['pass'];
$NoOfPeople=$_POST['NoOfPeople'];
$Parks=$_POST['parks'];
$w ="INSERT INTO `BookNow`( `Name`, `Password`, `PhoneNo`, `Date`,`NoOfPeople`, `Parks`) VALUES ( '".$Name."', '".$password."', '".$Contact."','".$date."', '".$NoOfPeople."', '".$Parks."')";
 
 if(!$w){
   echo"ERROR: $w <br> $con->error";
 }else{
  header("location: index1.html");
 }
 $result=$con->query($w);
}
 
}
?>
</body>
</form>
</html>    