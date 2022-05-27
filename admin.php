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
        <form action="admin.php" method="post">
        <label>Employee Name</label>
         <input type="text" id="ename" name="ename"><br><br>
         <label>EmployeeID</label>
         <input type ="text" id="emid" name ="emid"><br><br>
         <label>Salary</label>
         <input type="text" id="salary" name="salary"><br><br>
         <label>Gender</label>
              <select name="gender" id="gender">
                <option> </option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>>
              </select>
        <label for="submit">Add Employees</label>
        <input type ="submit" id="Submit2" name="Submit2">

        <?php
if(isset($_POST['Submit2'])){
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
$Salary=$_POST['salary'];
$Gender=$_POST['gender'];
 $w ="INSERT INTO `admindatabase`( `EmployeeName`, `EmployeeID`, `Salary`, `Gender`) VALUES ( '".$Name."', '".$EmpID."', '".$Salary."', '".$Gender."')";
 header("location: adminview.php");
 if(!$w){
   echo"ERROR: $w <br> $con->error";
 }
 $result=$con->query($w);
 
}
 
}
?>
</form>


    </body>
</html>