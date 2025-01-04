<html>
    <head>
    <link rel="stylesheet" href="instructor.css"/>
   
    </head>

  <body>
  <?php include('../connections/header.php'); ?>
  <div class="info">
     <form action="" method="post" >
    <table>
    <tr> 
  
    <td><input type="text" name="course" required  placeholder="Course " class="form-control"></td>
    </tr>

    <tr> 
  
    <td>
  <select id="day" name="day"  placeholder="day" class="selector">
  <option value="Saturday">Saturday</option>
  <option value="Sunday">Sunday</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
</select>
    </td>
    </tr>

    <tr> 

    <td>
      <select id="time" name="time"  placeholder="time" class="selector">
        <option value="8:30">8:30</option>
        <option value="9:30">9:30</option>
        <option value="10:00">10:00</option>
        <option value="11:30">11:30</option>
        <option value="1:30">1:30</option>
        <option value="3:00">3:00</option>
        <option value="4:30">4:30</option>
      </select>
    </td>
    </tr>

    <tr> 
   
    <td><input type="text" name="room" required placeholder="room" class="form-control"></td>
    </tr>

    <tr>

        <td><input type="text" name="faculty" required placeholder="Course Code" class="form-control" placeholder="faculty" class="form-control"></td>
    </tr>
    <tr>
    
    <tr>
    <td><input type="submit" name="submit" value="→"></td>
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
            header("Location: admin_home.php");
            header("Location: routine_database.php"); 
        }
        ?>
    
</table>
</form>

     </div>

   <?php include('../connections/footer.php'); ?>


  </body>
</html>