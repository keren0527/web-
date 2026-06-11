<?php
session_start();
$_SESSION=array();
session_destroy();
echo "<script>
    window.alert('Logged Out');
    window.location.href='index.php';
    </script>";
?>