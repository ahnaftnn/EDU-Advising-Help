<html>
    <head>
    <link rel="stylesheet" href="../style.css"/>
    <style>
      input[type=submit]{
        width: 50px;
    height: 30px;
    border: none;
    outline: none;
    background: #6A0032;
    color: #fff;
    font-size: 22px;
    border-radius: 40px;
    text-align: center;
    box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4);
    position: relative;
    overflow: hidden;
    cursor: pointer;
      }
    </style>
    </head>

  <body>
  <?php include('../connections/header.php'); ?>
  <div class="info">
     <form action="" method="post" >
    <table>
    <tr> 
    <td>Course Code</td>
    <td><input type="text" name="course" required></td>
    </tr>

    <tr> 
    <td>Day</td>
    <td>
  <select id="day" name="day">
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
    <td>Time</td>
    <td>
      <select id="time" name="time">
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
    <td>Room</td>
    <td><input type="text" name="room" required></td>
    </tr>

    <tr>
        <td>Faculty</td>
        <td><input type="text" name="faculty" required></td>
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