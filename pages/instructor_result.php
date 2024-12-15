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
                <td>Course Code</td>
                <td><input type="text" name="cc" placeholder="Course Code" class="form-control"> </td>
                <td>Grade</td>
                <td><select id="g" name="g">
                      <option value="4.0">4.00 (A)</option>
                      <option value="3.7">3.70 (A-)</option>
                      <option value="3.3">3.30 (B+)</option>
                      <option value="3.0">3.00 (B)</option>
                      <option value="2.7">2.70 (B-)</option>
                      <option value="2.3">2.30 (C+)</option>
                      <option value="2.0">2.00 (C)</option>
                      <option value="1.7">1.70 (C-)</option>
                      <option value="1.3">1.30 (D+)</option>
                      <option value="1.0">1.00 (D)</option>
                      <option value="0.0">0.00 (F)</option>
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
                    $grade = (float) $_POST['g'];
                    $sid= $_POST['sid'];
                    $course_code=$_POST['cc'];

                    $sql= "SELECT * FROM student_rcourse 
                           WHERE sid like '$sid' AND
                            course like '$course_code' ";

                     include('../connections/mysql_connect.php'); 
                    $count=mysqli_num_rows($res);
                    

                     if($count>0)
                     {

                      $sql="DELETE FROM student_rcourse WHERE sid like '$sid' AND course like '$course_code'";
                        include('../connections/mysql_connect.php');

                          $course_code=substr($course_code,0,7);
                          $sql= "INSERT INTO student_ccourse SET 
                           sid = '$sid',
                           course='$course_code',
                           cgpa='$grade'
                            ";

                        include('../connections/mysql_connect.php');
                    
                      header("Location: instructor_home.php");
                       header("Location: instructor_result.php");

                       echo "added successfully";
                       
                       
                     }else
                     {
                            echo "Course not Available";
                     }
               }
            

            
            ?>


    </div>
    

    </body>
</html>

