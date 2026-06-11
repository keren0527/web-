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
        <h1>signup</h1>
        <div class="formgroup">
        <label for="">Name:</label>
        <input type="text" name="name" id="" require>
        </div>
        <div class="formgroup">
        <label for="">Username:</label>
        <input type="text" name="uname" id="" require>
        </div>
        <div class="formgroup">
        <label for="">Email:</label>
        <input type="email" name="email" id="" require>
        </div>
        <div class="formgroup">
        <label for="">Password:</label>
        <input type="password" name="pass" id="" require>
       </div>
        <button type="submit" name="submit">login</button>
    </div>
        
    </form>
</div>
<?php
include('conn.php');
if(isset($_POST['submit'])){
$names = $_POST['name'];
$unames = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];



$select = "SELECT * from login where username = '$unames'";
$run = mysqli_query($conn,$select);

if(mysqli_num_rows($run)>0){
    echo ("<script>
    window.alert('Account Already exist');
    window.location.href='signup.php';
    </script>");
}else{

$insert = "INSERT into login values('','$names','$unames','$email','$pass')";
$exec = mysqli_query($conn,$insert);

if($exec){
    echo "<script>
    window.alert('Succesfully Created Acc.');
    window.location.href='index.php';
    </script>";
}else{
    echo 'Just An Error';
}
}
}
?>
</body>
</html>