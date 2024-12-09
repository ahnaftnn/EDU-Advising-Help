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
          echo $username;
        ?>
        <form action="#" method="POST">
                <div id="courses">
                <div class="row">
                <tr>
                <td>Student ID</td>
                <td><input type="text" name="sid" placeholder="Student ID" class="form-control"> </td>
                <td>Bank Slip</td>
                <td><select id="bank" name="bank">
                      <option value="u">Updated</option>
                      <option value="nu">Not Updated</option>
                    </select></td>
                 </tr>
                 </div>
                 </div> 
                 

                
                <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </form>

            <?php
               if(isset($_POST['submit']))
               {
                    $sid= $_POST['sid'];
                    $bank=$_POST['bank'];

                          $sql= "INSERT INTO bank_slip SET 
                           sid = '$sid',
                           updation='$bank'
                            ";

                        include('../connections/mysql_connect.php');                   
                      header("Location: administrator_home.php");
                       header("Location: admin_bank.php");
            }
            
            
            ?>

    </div>
    

    </body>
</html>


