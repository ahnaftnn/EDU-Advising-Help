<html>
<head>
<link rel="stylesheet" href="signup.css"/>
</head>
<body>
<?php include('../connections/header.php'); ?>
    <form action="#" method="POST">
        
        <input type="text" name="username" placeholder="enter your ID" required>
        
        <input type="password" name="password" placeholder="password"  required>
        <select id="role" name="role">
          <option value="Student">Student</option>
          <option value="Instructor">Instructor</option>
          <option value="Administrator">Administrator</option>
          <option value="Advisor">Advisor</option>
        </select>

        <input type="submit" name="submit" value="Sign Up" class= "btn-primary">
    </form>

    <br><br>
     <a href="login.php">Login Page</a>

    <?php
       if(isset($_POST['submit'])) {
        
        $username= $_POST['username'];
        $password= md5($_POST['password']);
        $role= $_POST['role'];

        $sql= "INSERT INTO user_data SET 
            username = '$username',
            password ='$password',
            role = '$role'
            ";
        include('../connections/mysql_connect.php');

        if($res==TRUE)
        {
            header("location: login.php");
        }

       }
     ?>
     
     
     
     <?php include('../connections/footer.php'); ?>
</body>




</html>