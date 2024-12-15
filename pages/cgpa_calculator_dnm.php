<html>
   <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../cgpacalculator_style.css"/>
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
                
                <td><input type="text" name="cc[]" placeholder="Course Code" class="form-control"> </td>
                
                <td><select id="g[]" name="g[]"class="form-control">
                      <option value="4.0">4.00 (A)</option>
                      <option value="3.7">3.70 (A-)</option>
                      <option value="3.3">3.30 (B+)</option>
                      <option value="3.0">3.00 (B)</option>
                      <option value="2.7">2.70 (B-)</option>
                      <option value="2.3">2.30 (C+)</option>
                      <option value="2.0">2.00 (C)</option>
                      <option value="1.7">1.70 (C-)</option>
                      <option value="1.3">1.30 (D+)</option>
                      <option value="1.0">1.00 (D)</option>
                      <option value="0.0">0.00 (F)</option>
                    </select></td>
                
                <td><input type="number" name="credits[]" placeholder="Credit" class="form-control" step="any" ></td>
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
                $fail_flag=0;
                for ($i = 0; $i < $n; $i++) {
                    $grade = (float) $_POST['g'][$i];
                    
                    if($grade==0.00)
                    {
                        $fail_flag=1;
                        break;
                    }

                    $credits = (float) $_POST['credits'][$i]; 

                    $g_sum += $grade * $credits; 
                    $cr_total += $credits;
                }
                
                if($fail_flag==0)
                {
                if ($cr_total > 0) {
                    echo "Total CGPA: " . round(($g_sum / $cr_total), 2);
                } else {
                    echo "Total CGPA: 0.00";
                }
                }  else
                {
                    echo "Total CGPA: 0.00";
                }


                }
            
            
            ?>

        </div>
        


        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </div>
        

<script>
    $(document).ready(function () {
        // Use event delegation
        $("#courses").on("click", ".add_course_btn", function (e) {
            e.preventDefault();
            $("#courses").prepend(`
                <div class="row">
                    <tr>
                       
                        <td><input type="text" name="cc[]"placeholder="Course Code"  class="form-control"></td>
                       
                        <td><select id="g[]" name="g[]"  class="form-control">
                      <option value="4.0">4.00 (A)</option>
                      <option value="3.7">3.70 (A-)</option>
                      <option value="3.3">3.30 (B+)</option>
                      <option value="3.0">3.00 (B)</option>
                      <option value="2.7">2.70 (B-)</option>
                      <option value="2.3">2.30 (C+)</option>
                      <option value="2.0">2.00 (C)</option>
                      <option value="1.7">1.70 (C-)</option>
                      <option value="1.3">1.30 (D+)</option>
                      <option value="1.0">1.00 (D)</option>
                      <option value="0.0">0.00 (F)</option>
                    </select></td>
                      
                        <td><input type="number" name="credits[]"  placeholder="Credit" class="form-control" step="any" ></td>
                        
                    </tr>
                </div>
            `);
        });
    });
    
</script>



<?php include('../connections/footer.php'); ?>
   </body>

</html>