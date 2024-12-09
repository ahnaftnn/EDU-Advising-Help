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
                <input type="text" name="cc1" placeholder="Enter Course Code" id='wbox_1' class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc2" placeholder="Enter Course Code" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc3" placeholder="Enter Course Code" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc4" placeholder="Enter Course Code" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc5" placeholder="Enter Course Code" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="text" name="cc6" placeholder="Enter Course Code" class='wbox'><br>
                </div>
                <div class='box'>
                    <input type="text" name="cc7" placeholder="Enter Course Code" class='wbox'><br>
                </div>
                <div class='box'>
                <input type="submit" name="submit" value="Submit" class='end '>
                </div>
            
           
            
            
            
            
            

            
       </form>
        </div>
</div>

       <?php include('../connections/footer.php'); ?>

   </body>


</html>