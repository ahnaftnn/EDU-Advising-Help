<?php
    
    $conn = mysqli_connect('localhost','root','') or die(mysqli_error());
    $db_select = mysqli_select_db($conn,'edu_advising_help') or die(mysqli_error());
    
    $res = mysqli_query($conn, $sql) or die(mysqli_error());
    
    header("Location: http://localhost:8080/EDU Advising Help/pages/admin_home.php");
    
    
?>