<html>
    <head>
    <link rel="stylesheet" href="../style.css"/>
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
     <form action="" >
    <table>
    <tr> 
    <td>     </td>
    <td>8:30 AM </td>
    <td>9:30 AM </td>
    <td>10:00 AM </td>
    <td>11:30 AM </td>
    <td>1:30 AM </td>
    <td>3:30 AM </td>
    <td>4:30 AM </td>
    </tr>

    <tr> 
    <td>Sunday</td>
    <td>  <?php $sql= "SELECT course FROM routine 
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
              echo $courseid;   
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


    <td>    <?php $sql= "SELECT course FROM routine 
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
              echo $courseid;   
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
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              echo $courseid;   
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
</form>

     </div>

   <?php include('../connections/footer.php'); ?>


  </body>
</html>