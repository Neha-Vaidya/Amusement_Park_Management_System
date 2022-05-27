<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$server = 'localhost:3307';
$username = 'root';
$password = "";

  $database='amusementpark';
 
  $con= new mysqli ($server,$username,$password,$database);
  
  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error);
 
  }
else{
  
$rides="SELECT * FROM `admindatabase`";
$result= mysqli_query($con,$rides);

}


?>


<table align = "center" border = "1px" style = "width: 600px; line-height: 40px;">
        <tr>
            <th colspan = "4"><h2>Employee Details</h2></th>
        </tr>
            <t>
            <th>EmployeeName</th>
            <th>EmployeeID</th>
            <th>Salary</th>
            <th>Gender</th>
            </t>

            <?php

while($row = mysqli_fetch_assoc($result)) {
   
    ?>
    <tr>
        
        <td>  <?php echo  $row['EmployeeName']; ?>  </td>
        <td>  <?php echo  $row['EmployeeID']; ?>  </td>
        <td>  <?php echo  $row['Salary']; ?>  </td>
        <td>  <?php echo  $row['Gender']; ?>  </td>
       
    </tr>
    
    <?php
}

?>
       
    </table>


</body>
</html>