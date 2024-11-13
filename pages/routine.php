<html>
    <head>
        <title>EDU Routine</title>
    </head>
    
   <body>
       <?php include('../connections/header.php'); ?>
        

       <form method="POST">
            <br>
            <strong>Course Code</strong><br>
            <input type="text" name="cc1"><br>
            <input type="text" name="cc2"><br>
            <input type="text" name="cc3"><br>
            <input type="text" name="cc4"><br>
            <input type="text" name="cc5"><br>
            <input type="text" name="cc6"><br>
            <input type="text" name="cc7"><br>
            <input type="submit" name="submit">

            <?php  
              if(isset($_POST['submit']))
              {
                header("Location: http://localhost:8080/EDU Advising Help/admin_home.php");
              }
            ?>
       </form>




   </body>


</html>