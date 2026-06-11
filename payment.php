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
        <h1>PAYMENTS</h1> 
        <div class="formgroup">
        <label for="">select:</label>
        <select name="pselect" id="" require>
            <option value=""hidden></option>
            <option value="schoolfee">school fees</option>
            <option value="water">water</option>
            <option value="electricity">electricity</option>
            <option value="gas">Gas</option>
            <option value="house maid">house maid</option>         
        </select>
        </div>
        <div class="formgroup">
        <label for="">Date:</label>
        <input type="date" name="date" id="" require>
       </div>
        <div class="formgroup">
        <label for="">Amount:</label>
        <input type="text" name="amount" id="">
    </div>
        <button type="submit" name="submit">payment</button>
        <a href="displayp.php">view</a>
    </form>
</div>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $pselect=$_POST['pselect'];
    $date=$_POST['date'];
    $amount=$_POST['amount'];
    
    $ins="INSERT INTO payment VALUES('','$pselect','$date','$amount')";
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