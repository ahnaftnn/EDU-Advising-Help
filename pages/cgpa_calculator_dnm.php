<html>
   <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../style.css"/>
   </head>
   <body>
   <?php include('../connections/header.php'); ?>
    <div class="bodyy">
        <div class="upper_body">
            <h1>CGPA Calculator</h1>
            <h3>Calculate your CGPA</h3>
            <h3>Know your academic progress</h3>
        </div>
        <div class="main_body">
            <form action="#" method="POST">
                <div id="courses">
                <div class="row">
                <tr>
                <td>Course Code</td>
                <td><input type="text" name="cc[]" class="form-control"></td>
                <td>Grade</td>
                <td><input type="number" name="g[]" class="form-control" step="any" ></td>
                <td>Credits</td>
                <td><input type="number" name="credits[]" class="form-control" step="any" ></td>
                <td><button class="add_course_btn">Add more</button></td>
            
                 </tr>
                 </div>
                 </div> 
                 

                
                <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </form>

            <?php
               if(isset($_POST['submit']))
               {
                
                $n=count($_POST['g']);
                $g_sum=0;
                $cr_total=0;
                for ($i = 0; $i < $n; $i++) {
                    $grade = (float) $_POST['g'][$i]; 
                    $credits = (float) $_POST['credits'][$i]; 

                    $g_sum += $grade * $credits; 
                    $cr_total += $credits;
                }
                
                if ($cr_total > 0) {
                    echo "Total CGPA: " . round(($g_sum / $cr_total), 2);
                } else {
                    echo "Total CGPA: 0.00";
                }
                }
            
            
            ?>

        </div>

        <?php include('../connections/footer.php'); ?>

    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        // Use event delegation
        $("#courses").on("click", ".add_course_btn", function (e) {
            e.preventDefault();
            $("#courses").prepend(`
                <div class="row">
                    <tr>
                        <td>Course Code</td>
                        <td><input type="text" name="cc[]" class="form-control"></td>
                        <td>Grade</td>
                        <td><input type="number" name="g[]" class="form-control" step="any" ></td>
                        <td>Credits</td>
                        <td><input type="number" name="credits[]" class="form-control" step="any" ></td>
                        
                    </tr>
                </div>
            `);
        });
    });
    
</script>



   </body>

</html>