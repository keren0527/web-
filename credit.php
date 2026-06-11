<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit</title>
    <link rel="stylesheet" href="form.css">

</head>
<body>
<a href="home.php">&lt; Back</a>
    <div class="container">
    <form action="" method="post">
        <h1>Credit</h1>
        <div class="formgroup">
        <label for="">Source:</label>
        <input type="text" name="src" id="" require>
        </div>
        <div class="formgroup">
        <label for="">Amount:</label>
        <input type="text" name="amount" id="" require>
       </div>
        <div class="formgroup">
        <label for="">Date:</label>
        <input type="date" name="date" id="" require>
    </div>
        <button type="submit" name="submit">Debit</button>
        <a href="displayc.php">view</a>
    </form>
</div>
</body>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $src=$_POST['src'];
    $amount=$_POST['amount'];
    $date=$_POST['date'];
    $ins="INSERT INTO credit VALUES('','$src','$amount','$date')";
    $execute=mysqli_query($conn,$ins);
    if($execute){
        echo"<script>
        alert('okay')
        </script>";

    }else{
        echo"<script>
        alert('fail')
        </script>";
    }
}
?>
</html>