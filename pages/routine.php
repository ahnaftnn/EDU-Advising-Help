<html>
    <head>
        <title>EDU Routine</title>
        <link rel="stylesheet" href="../style.css"/>
    </head>
    
   <body>
       <?php include('../connections/header.php'); ?>
      <div class="Routine_input">

       <form method="POST" action="final_routine.php">
            <br>
           
            <h1 style="color: white;">Course Code</h1><br>
            <div class='background'>
                <div class='box'>
                <input type="text" name="cc1" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc2" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc3" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc4" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc5" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc6" class='wbox'><br>
                </div>
                <div class='box'>
                    <input type="text" name="cc7" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="submit" name="submit">
                </div>
            
           
            
            
            
            
            

            
       </form>
        </div>
</div>

       <?php include('../connections/footer.php'); ?>

   </body>


</html>