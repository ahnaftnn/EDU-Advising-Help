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
                <tr>
                <td>Course Code 01</td>
                <td><input type="text" name="cc1" ></td>
                <td>Grade</td>
                <td><input type="number" name="g1"  step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits1"  step="any" value="0"></td>
                </tr> <br>
                
                <tr>
                <td>Course Code 02</td>
                <td><input type="text" name="cc2" ></td>
                <td>Grade</td>
                <td><input type="number" name="g2"  step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits2"  step="any" value="0"></td>
                </tr><br>

                <tr>
                <td>Course Code 03</td>
                <td><input type="text" name="cc3" ></td>
                <td>Grade</td>
                <td><input type="number" name="g3"  step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits3"  step="any" value="0"></td>
                </tr><br>

                <tr>
                <td>Course Code 04</td>
                <td><input type="text" name="cc4" ></td>
                <td>Grade</td>
                <td><input type="number" name="g4"  step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits4"  step="any" value="0"></td>
                </tr><br>

                <tr>
                <td>Course Code 05</td>
                <td><input type="text" name="cc5" ></td>
                <td>Grade</td>
                <td><input type="number" name="g5"  step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits5"  step="any" value="0"></td>
                </tr><br>

                <tr>
                <td>Course Code 06</td>
                <td><input type="text" name="cc6" ></td>
                <td>Grade</td>
                <td><input type="number" name="g6"  step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits6"  step="any" value="0"></td>
                </tr><br>

                <tr>
                <td>Course Code 07</td>
                <td><input type="text" name="cc7" ></td>
                <td>Grade</td>
                <td><input type="number" name="g7"  step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits7" step="any" value="0"></td>
                </tr><br>

                <tr>
                <td>Course Code 08</td>
                <td><input type="text" name="cc8" ></td>
                <td>Grade</td>
                <td><input type="number" name="g8" step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits8" step="any" value="0"></td>
                </tr><br>

                <tr>
                <td>Course Code 09</td>
                <td><input type="text" name="cc9" ></td>
                <td>Grade</td>
                <td><input type="number" name="g9" step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits9" step="any" value="0"></td>
                </tr><br>

                <tr>
                <td>Course Code 10</td>
                <td><input type="text" name="cc10" ></td>
                <td>Grade</td>
                <td><input type="number" name="g10" step="any" value="0"></td>
                <td>Credits</td>
                <td><input type="number" name="credits10" step="any" value="0"></td>
                </tr><br> 


                <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </form>

            <?php
               if(isset($_POST['submit']))
               {
                $g1=$_POST['g1']; $credits1=$_POST['credits1'];
                $g2=$_POST['g2']; $credits2=$_POST['credits2'];
                $g3=$_POST['g3']; $credits3=$_POST['credits3'];
                $g4=$_POST['g4']; $credits4=$_POST['credits4'];
                $g5=$_POST['g4']; $credits5=$_POST['credits5'];
                $g6=$_POST['g4']; $credits6=$_POST['credits6'];
                $g7=$_POST['g4']; $credits7=$_POST['credits7'];
                $g8=$_POST['g4']; $credits8=$_POST['credits8'];
                $g9=$_POST['g4']; $credits9=$_POST['credits9'];
                $g10=$_POST['g4']; $credits10=$_POST['credits10'];
                
                $g_sum=($g1*$credits1)+($g2*$credits2)+($g3*$credits3)+($g4*$credits4)+($g5*$credits5)+($g6*$credits6)+($g7*$credits7)+($g8*$credits8)+($g9*$credits9)+($g10*$credits10);
                $cr_total=$credits1+$credits2+$credits3+$credits4+$credits5+$credits6+$credits7+$credits8+$credits9+$credits10;

                echo "Total CGPA: ".round(($g_sum/$cr_total),2);
                }
            
            
            ?>

        </div>

        <?php include('../connections/footer.php'); ?>
   </body>

</html>