<html>
   <head>
    <title>Login Page</title>
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
        <td>Faculty Name</td>
        <td><input type="text" name="name" ></td>
    </tr>
    <tr>
    
    <tr>
    <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
     <?php   
        if(isset($_POST['submit']))
        { 
            $name = $_POST['name'];
            $course = $_POST['course'];
              
            $sql= "INSERT INTO course_faculty SET 
            Course = '$course',
            Faculty='$name'
            ";
            include('../connections/mysql_connect.php'); 
            header("Location: http://localhost:8080/EDU Advising Help/pages/admin_home.php"); 
            header("Location: http://localhost:8080/EDU Advising Help/pages/course_faculty.php");
        }
        ?>
</table>
</form>

     </div>

   <?php include('../connections/footer.php'); ?>

   </body>

</html>