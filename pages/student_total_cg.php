<html>
<head>

</head>
<body>
        <?php
            session_start();
            $username=$_SESSION['user'];
            $sql= "SELECT course,cgpa FROM 
            student_ccourse WHERE sid like '$username'
            ";
            include('../connections/mysql_connect.php'); 
            
            $cg= array();
            $c_course = array();
            $total_cg=0;
            $total_creds=0;
            $count=mysqli_num_rows($res);
            
            if($count>0)
            {
                for($i=0; $i<$count; $i++)
                {
              $rows= mysqli_fetch_assoc($res);
              $temp_c_course= $rows['course'];
              array_push($c_course,"$temp_c_course");
              $temp_cg=$rows['cgpa'];
              array_push($cg,"$temp_cg");
              
              //echo $c_course.' '.$cg.' ';
                }   

                for($i=0; $i<$count; $i++)
                {
              
                  $c_course[$i] = substr($c_course[$i],4,3);
                  if($c_course[$i]%2==0)
                  {
                    $total_cg+=(1.5*$cg[$i]);
                    $total_creds+=1.5;
                  } else
                  {
                    $total_cg+=(3.0*$cg[$i]);
                    $total_creds+=3.0;
                  }
                }

                echo "TOTAL CGPA: ". round(($total_cg/$total_creds),2);

            }
                                       
                                       
        ?>

</body>


</html>