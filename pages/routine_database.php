<html>
    <head>
    <link rel="stylesheet" href="../style.css"/>
    </head>

  <body>
  <?php include('../connections/header.php'); ?>
  <div class="info">
     <form action="" method="post" >
    <table>
    <tr> 
    <td>Course Code</td>
    <td><input type="text" name="course" ></td>
    </tr>

    <tr> 
    <td>Day</td>
    <td><input type="text" name="day" ></td>
    </tr>

    <tr> 
    <td>Time</td>
    <td><input type="text" name="time" ></td>
    </tr>

    <tr> 
    <td>Room</td>
    <td><input type="text" name="room" ></td>
    </tr>

    <tr>
        <td>Faculty</td>
        <td><input type="text" name="faculty" ></td>
    </tr>
    <tr>
    
    <tr>
    <td><input type="submit" name="submit" value="Submit"></td>
    </tr>

    <?php   
        if(isset($_POST['submit']))
        { 
            $course = $_POST['course'];
            $day = $_POST['day'];
            $time = $_POST['time'];
            $room = $_POST['room'];
            $faculty = $_POST['faculty'];
              
            $sql= "INSERT INTO routine SET 
            course = '$course',
            day='$day',
            time='$time',
            room='$room',
            faculty='$faculty'
            ";
            include('../connections/mysql_connect.php'); 
            header("Location: http://localhost:8080/EDU Advising Help/pages/admin_home.php");
            header("Location: http://localhost:8080/EDU Advising Help/pages/routine_database.php"); 
        }
        ?>
    
</table>
</form>

     </div>

   <?php include('../connections/footer.php'); ?>


  </body>
</html>