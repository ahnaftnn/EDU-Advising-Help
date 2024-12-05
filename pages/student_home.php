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

    <div class="running_course">
        <?php
          
          $username=$_SESSION['user'];
          

          $sql= "SELECT course FROM 
                 student_rcourse
                 where sid IN (SELECT username
              from user_data
              where username like $username); 
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            $course=array();
            if($count>0)
            {
              for($i=0; $i<$count; $i++)
            {
              $rows= mysqli_fetch_assoc($res);
              $temp=$rows['course'];
              array_push($course,"$temp");
            }   
            }  
            $_SESSION['course']=$course;    
            $_SESSION['count']= $count;          
        ?>

        <a href="student_routine.php">Routine</a>
        <a href="student_total_cg.php">Reports</a>
    </div>
    

    </body>
</html>


