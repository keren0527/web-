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
        <h1>STOCK</h1>
        <div class="formgroup">
        <label for="">amount to be used:</label>
        <input type="text" name="apaid" id="" require>
        </div>
        <div class="formgroup">
        <label for="">date:</label>
        <input type="date" name="date" id="" require>
       </div>
        <div class="formgroup">
        <label for="">list of items:</label>
        <textarea name="loi" id="" cols="30" rows="10"require></textarea>
    </div>
        <button type="submit" name="submit">Debit</button>
        <a href="displays.php">view</a>
    </form>
</div>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $apaid=$_POST['apaid'];
    $date=$_POST['date'];
    $loi=$_POST['loi'];
    $ins="INSERT INTO stock VALUES('','$apaid','$date','$loi')";
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