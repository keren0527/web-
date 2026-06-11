<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>
<a href="plans.php">back..</a>

<table border=1 cellspacing=0>
    <th>id</th>
    <th>amount paid</th>
    <th>date</th>
    <th>list items</th>
    <?php
       include("conn.php");
       $g=mysqli_query($conn,"SELECT * FROM stock" );
       if(mysqli_num_rows($g)>0){
foreach($g as $row){
   echo "<tr>";
   echo "<td>".$row['sid']. "</td>";
   echo "<td>".$row['amount_paid']. "</td>";
   echo "<td>".$row['date']. "</td>";
   echo "<td>".$row['list_items']. "</td>";

echo "</tr>";
}
       }
    ?>
 </table>  

</body>
</html>