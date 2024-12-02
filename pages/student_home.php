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

    <div class="profile">
        <?php
          
          echo $_SESSION['user'];
        ?>
    </div>
    

    </body>
</html>