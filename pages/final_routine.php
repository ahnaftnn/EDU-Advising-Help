<html>
    <head>
    <link rel="stylesheet" href="../style.css"/>
    <style>
      table,tr,td,th{
        border-collapse: collapse;
        margin-left:auto;
        margin-right:auto;
        text-align:center;
        margin-top: 10%;
        padding-left: 10px;
        padding-right: 10px;
      }
    </style>

    </head>

  <body>
  <?php include('../connections/header.php'); ?>
  <?php
  $cc1=$_POST['cc1'];
  $cc2=$_POST['cc2'];
  $cc3=$_POST['cc3'];
  $cc4=$_POST['cc4'];
  $cc5=$_POST['cc5'];
  $cc6=$_POST['cc6'];
  $cc7=$_POST['cc7'];
  ?>

  <div class="routine">
     
    <table border=1 class="text-center">
    <tr> 
    <td>     </td>
    <th>8:30 AM </th>
    <th>9:30 AM </th>
    <th>10:00 AM </th>
    <th>11:30 AM </th>
    <th>1:30 AM </th>
    <th>3:00 AM </th>
    <th>4:30 AM </th>
    </tr>

    <tr> 
    <th>Sunday</th>
    <td>  <?php $sql= "SELECT course,faculty,room FROM routine 
      where day like 'Sunday' AND
      time like '8:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
            ?>     
            </td>

            <td>  <?php $sql= "SELECT course FROM routine 
      where day like 'Sunday' AND
      time like '9:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>     
            </td>

    <td>  <?php $sql= "SELECT course FROM routine 
      where day like 'Sunday' AND
      time like '10:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>     
            </td>


    <td>    <?php $sql= "SELECT course,faculty,room FROM routine 
      where day like 'Sunday' AND
      time like '11:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7' )
            ";
            include('../connections/mysql_connect.php');
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
            ?>
            </td>


    <td>  <?php $sql= "SELECT course FROM routine 
      where day like 'Sunday' AND
      time like '1:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7' )
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              for($i=0; $i<$count; $i++)
              {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid."<br>";}   
            } ?>     </td>


    <td>    <?php $sql= "SELECT course FROM routine 
      where day like 'Sunday' AND
      time like '3:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7' )
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } ?>   </td>


    <td>    <?php $sql= "SELECT course FROM routine 
      where day like 'Sunday' AND
      time like '4:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7' )
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>   </td>
    </tr>

    <tr> 
    <td>Monday</td>
    <td> <?php $sql= "SELECT course FROM routine 
      where day like 'Monday' AND
      time like '8:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>      
            </td>

    <td> <?php $sql= "SELECT course FROM routine 
      where day like 'Monday' AND
      time like '9:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>      
            </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Monday' AND
      time like '10:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Monday' AND
      time like '11:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Monday' AND
      time like '1:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Monday' AND
      time like '3:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Monday' AND
      time like '4:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>
    </tr>

    <tr> 
    <td>Tuesday</td>
    <td> <?php $sql= "SELECT course FROM routine 
      where day like 'Tuesday' AND
      time like '8:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>      
            </td>
    
            <td> <?php $sql= "SELECT course FROM routine 
      where day like 'Tuesday' AND
      time like '9:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>      
            </td>

    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Tuesday' AND
      time like '10:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Tuesday' AND
      time like '11:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Tuesday' AND
      time like '1:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Tuesday' AND
      time like '3:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Tuesday' AND
      time like '4:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>
    </tr>

    <tr> 
    <td>Wednesday</td>
    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Wednesday' AND
      time like '8:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>

    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Wednesday' AND
      time like '9:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>

    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Wednesday' AND
      time like '10:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>      
    <?php $sql= "SELECT course FROM routine 
      where day like 'Wednesday' AND
      time like '11:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?> </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Wednesday' AND
      time like '1:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Wednesday' AND
      time like '3:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>
    <?php $sql= "SELECT course FROM routine 
      where day like 'Wednesday' AND
      time like '4:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>     
    </td>
    </tr>

    <tr> 
    <td>Thursday</td>
    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Thursday' AND
      time like '8:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>

    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Thursday' AND
      time like '9:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>

    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Thursday' AND
      time like '10:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Thursday' AND
      time like '11:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Thursday' AND
      time like '1:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Thursday' AND
      time like '3:00' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>


    <td>       
    <?php $sql= "SELECT course FROM routine 
      where day like 'Thursday' AND
      time like '4:30' AND
      (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR
       course like '$cc6' OR
       course like '$cc7')
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
            } 
            ?>
    </td>
    </tr>   
</table>
      
     
     </div>
  <div class="faculty">
  <?php $sql= "SELECT course,faculty_name FROM course_faculty
WHERE course IN (SELECT course from routine 
                  WHERE (course like '$cc1' OR 
       course like '$cc2' OR 
       course like '$cc3' OR
       course like '$cc4' OR
       course like '$cc5' OR  
       course like '$cc6' OR
       course like '$cc7' )); 
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              for($i=0; $i<$count; $i++)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty_name'];
              echo $courseid." : ".$faculty."<br>";
            }   
            } 
            ?> 
     
  </div>

   <?php include('../connections/footer.php'); ?>


  </body>
</html>