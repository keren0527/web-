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
<a href="home.php">back..</a>

<table border=1 cellspacing=0>
    <th>id</th>
    <th>source</th>
    <th>amount</th>
    <th>date</th>
    <?php
       include("conn.php");
       $g=mysqli_query($conn,"SELECT * FROM credit");
       if(mysqli_num_rows($g)>0){
foreach($g as $row){
   echo "<tr>";
   echo "<td>".$row['cid']. "</td>";
   echo "<td>".$row['source']. "</td>";
   echo "<td>".$row['amount']. "</td>";
   echo "<td>".$row['date']. "</td>";

echo "</tr>";
}
       }
    ?>
 </table>  
</body>
</html>