<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Visitor.php" method="post">

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
  
$rides="SELECT * FROM `booknow`";
$result= mysqli_query($con,$rides);

}


?>


<table align = "center" border = "1px" style = "width: 600px; line-height: 40px;">
        <tr>
            <th colspan = "4"><h2>Visitors Details</h2></th>
        </tr>
            <t>
            <th>Name</th>
            <th>Phone No</th>
            <th>Date</th>
            <th>No Of People</th>
            <th>Parks</th>
            </t>

            <?php

while($row = mysqli_fetch_assoc($result)) {
   
    ?>
    <br>
    <tr>
        
        <td>  <?php echo  $row['Name']; ?>  </td>
        <td>  <?php echo  $row['PhoneNo']; ?>  </td>
        <td>  <?php echo  $row['Date']; ?>  </td>
        <td>  <?php echo  $row['NoOfPeople']; ?>  </td>
        <td>  <?php echo  $row['Parks']; ?>  </td>
       
    </tr>
    

    <?php
}
?>

<?php
$w = "SELECT SUM(`NoOfPeople`) FROM booknow";

$result2=$con->query($w);
$row = mysqli_fetch_array($result2);

echo "Total Visitors:<input type='text' value='$row[0]'/>";



// $result= mysqli_query($con,$w);

?>
       
    </table>


    <script>

        function add(){
            var a=document.getElementByID('click2');
            var a=<?php $result2 ?> ;
            document.getElementByID('click2').value=a;
        }
    </script>
</body>
</html>