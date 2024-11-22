<html>
   <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../style.css"/>
   </head>
   <body>
   <?php include('../connections/header.php'); ?>
    <form action="#" method="POST">
        username
        <input type="text" name="username">
        password
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
     <?php
       if(isset($_POST['submit']) && $_POST['username']=="admin" && $_POST['password']=="admin" ) {
        header('Location: admin_home.php');
       }
     ?>
     <?php include('../connections/footer.php'); ?>
   </body>

</html>