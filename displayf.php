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
    <th>want</th>
    <th>amount</th>
    <?php
       include("conn.php");
       $g=mysqli_query($conn,"SELECT * FROM family_wants");
       if(mysqli_num_rows($g)>0){
foreach($g as $row){
   echo "<tr>";
   echo "<td>".$row['fid']. "</td>";
   echo "<td>".$row['wants']. "</td>";
   echo "<td>".$row['amount']. "</td>";
echo "</tr>";
}
       }
    ?>
 </table>  

</body>
</html>