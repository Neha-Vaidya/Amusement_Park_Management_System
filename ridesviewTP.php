<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="formcss.css">
    <link rel="stylesheet" href="database.css">
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
  
$rides="SELECT * FROM `Trampolinerides`";
$result= mysqli_query($con,$rides);

}


?>


<table align = "center" border = "1px" style = "width: 600px; line-height: 40px;">
        <tr>
            <th colspan = "4"><h2>Trampolin Rides Details</h2></th>
        </tr>
            <t>
            <th>Ride ID</th>
            <th>Ride Name</th>
            <th>Description</th>
           
            </t>

            <?php

while($row = mysqli_fetch_assoc($result)) {
   
    ?>
    <tr>
        
        <td>  <?php echo  $row['RideID']; ?>  </td>
        <td>  <?php echo  $row['RideName']; ?>  </td>
        <td>  <?php echo  $row['Description']; ?>  </td>
      
       
    </tr>
    
    <?php
}

?>
       
    </table>
<br>
<br>
    <h3><p style = "margin-left : 150px">Price per head : 1000 Rs</p> </h3>

</body>
</html>