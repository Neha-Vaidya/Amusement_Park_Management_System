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
        <h1>
            admin
        </h1>
        <form action="admin1.php" method="post">
        <label>Employee Name</label>
         <input type="text" id="ename" name="ename"><br><br>
         <label>EmployeeID</label>
         <input type ="text" id="emid" name ="emid"><br><br>
        <label for="submit">Delete Employees</label>
        <input type ="submit" id="Submit1" name="Submit1">
 
        <?php
        ob_start();
if(isset($_POST['Submit1'])){
    $server = 'localhost:3307';
    $username = 'root';
    $password = "";
    

  $database='amusementpark';
 
  $con= new mysqli ($server,$username,$password,$database);
 
  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error);
 
  }
else{
$Name=$_POST['ename'];
$EmpID=$_POST['emid'];

 $w = "DELETE FROM admindatabase  WHERE EmployeeID = '$EmpID'";
 echo $w;

 $result= mysqli_query($con,$w);
 header("location: adminview.php");



 if(!$w){
   echo"ERROR: $w <br> $con->error";
 }
 
 
}
 
}
?>
</form>


    </body>
</html>