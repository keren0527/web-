<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<form action="" method="post">
   <a href="plans.php">&lt; Back</a>
    <div class="container">
    <form action="" method="post">
        <h1>Family wants</h1>
        <div class="formgroup">
        <label for="">Wants:</label>
        <input type="text" name="want" id="" require>
        </div>
        <div class="formgroup">
        <label for="">amount to be used:</label>
        <input type="text" name="amount" id="" require>
        </div>
    
        <button type="submit" name="submit">Debit</button>
        <a href="displayf.php">view</a>
        </div>
    </form>
    <?php
include("conn.php");
if(isset($_POST['submit'])){
    $want=$_POST['want'];
    $amount=$_POST['amount'];
    $ins="INSERT INTO family_wants VALUES('','$want','$amount')";
    $execute=mysqli_query($conn,$ins);
    if($execute){
        echo"<script>
        alert('okay')
        window.location.href='plans.php';
        </script>";

    }else{
        echo"<script>
        alert('fail')
        </script>";
    }
}
?>
</body>
</html>