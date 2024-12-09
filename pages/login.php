<html>
   <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../style.css"/>
   </head>
   <body>
   <?php include('../connections/header.php'); ?>

     <?php
        session_start();
        if(isset($_SESSION['login']))
        {
          echo $_SESSION['login'];
          unset($_SESSION['login']);
        }
     ?>


     <br><br>
    <form action="#" method="POST">
        username
        <input type="text" name="username" placeholder="enter your ID">
        password
        <input type="password" name="password">
        <select id="role" name="role">
          <option value="Student">Student</option>
          <option value="Instructor">Instructor</option>
          <option value="Administrator">Administrator</option>
          <option value="Advisor">Advisor</option>
        </select>

        <input type="submit" name="submit" value="login" class= "btn-primary">
    </form>

     <br><br>
     <a href="sign_up.php">Sign Up</a>

     <?php
       if(isset($_POST['submit'])) {
        
        $username= $_POST['username'];
        $password= md5($_POST['password']);
        $role= $_POST['role'];

        $sql= "SELECT * FROM user_data WHERE username='$username' AND password='$password' AND role='$role'
            ";
        include('../connections/mysql_connect.php');

        $count= mysqli_num_rows($res);

        if($count==1 && $role=='Advisor')
        {
           $_SESSION['login']= "<div class='success'>Login Succesful</div>";
           $_SESSION['user']= $username;
           header("Location: admin_home.php");
        } else if($count==1 && $role=='Student')
        {
          $_SESSION['login']= "<div class='success'>Login Succesful</div>";
          $_SESSION['user']= $username;
          header("Location: student_home.php");
        } else if($count==1 && $role=='Instructor')
        {
          $_SESSION['login']= "<div class='success'>Login Succesful</div>";
          $_SESSION['user']= $username;
          header("Location: instructor_home.php");
        }else if($count==1 && $role=='Administrator')
        {
          $_SESSION['login']= "<div class='success'>Login Succesful</div>";
          $_SESSION['user']= $username;
          header("Location: administrator_home.php");
        }else
        {
          $_SESSION['login']= "<div class='error text-center'>Invalid Username or Password</div>";
          header("Location: login.php");
        }



       }
     ?>
     
     
     
     <?php include('../connections/footer.php'); ?>
   </body>

</html>