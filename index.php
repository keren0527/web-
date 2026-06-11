<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <h1>login</h1>
        <div class="formgroup">
        <label for="">Username:</label>
        <input type="text" name="uname" id="" require>
        </div>
        <div class="formgroup">
        <label for="">Password:</label>
        <input type="password" name="pass" id="" require>
       </div>
        <button type="submit" name="submit">login</button>
        
        <p>No account?<a href="signup.php">signup</a></p>
    </div>
        
    </form>
</div>
<?php
session_start();
include('conn.php');
if(isset($_POST['submit'])){
$uname = $_POST['uname'];
$pass = $_POST['pass'];

//$select = "SELECT * from login where username = '$uname' and password = '$pass'";
$run = mysqli_query($conn,"SELECT * from login where username = '$uname' and password = '$pass'");

if(mysqli_num_rows($run)>0){
    $row=mysqli_fetch_assoc($run);
    $_SESSION['user'] = $row['username'];
    echo ("<script>
    window.alert('Succesfully Logged In');
    window.location.href='home.php?$uname';
    </script>");
}else{
    echo "<script>
    window.alert('Invalid Credentials');
    window.location.href='index.php';
    </script>";
}
}
?>
</body>
</html>