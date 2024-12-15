<?php 
  include('login_check.php');
?>
<html>
    <head>
    <link rel="stylesheet" href="../style.css"/>
    </head>
    <body>
    <?php include('../connections/header.php'); ?>
    <div class="header">
    <div class="info">
            <a href="logout.php">Log out</a>
        </div>
    </div>

    <div class="body">
        <?php
          
          $username=$_SESSION['user'];          
        ?>

        <a href="admin_bank.php">Bank Data Updation</a>
    </div>
    

    </body>
</html>

