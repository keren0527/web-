<?php
include("conn.php");
session_start();
if($_SESSION['user']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="nav">
      <div class="logo">
        <h4>finafam</h4>
    </div>
    <div class="links">
    <a href="debit.php">debit</a>
        <a href="credit.php">credits</a>
        <a href="plans.php">plans</a>
        <a href="logout.php">logout</a>
    </div>
        </div>
    <section class="p"> 
       <h1>Manage your family finance effeciently</h1>
</section>

</body>
</html>
<?php
}
else{
    echo "<script>alert('first login')
    window.location.href='index.php';
    </script>";
}
?>