<?php 
  include('login_check.php');
?>

<html>
    <head>
    <link rel="stylesheet" href="instructor.css"/>
    </head>
    <body>
    <?php include('../connections/header.php'); ?>
    <div class="header">
    <div class="info">
            <a href="logout.php">Log out</a>
        </div>

    </div>
        
    <?php
        if(isset($_SESSION['login']))
        {
          echo $_SESSION['login'];
          unset($_SESSION['login']);
        }
     ?>  
        <div class="miso">
    <a href="course_faculty.php">Faculty Information </a><br>
    <a href="routine_database.php">Routine </a>
      </div>

    
    <?php include('../connections/footer.php'); ?>
  </body>
</html>