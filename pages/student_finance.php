<html>
<head>

</head>
<body>
        <?php
            session_start();
            $username=$_SESSION['user'];
            $sql= "SELECT course FROM 
            student_rcourse WHERE sid like '$username'
            ";
            include('../connections/mysql_connect.php'); 
            
            $c_course = array();
            $total_cost=0;
            $count=mysqli_num_rows($res);
            
            if($count>0)
            {
                for($i=0; $i<$count; $i++)
                {
              $rows= mysqli_fetch_assoc($res);
              $temp_c_course= $rows['course'];
              array_push($c_course,"$temp_c_course");
              
              
                }   

                for($i=0; $i<$count; $i++)
                {
                  echo $c_course[$i].' ';

                  
                  $c_course[$i] = substr($c_course[$i],4,3);
                  
                  if($c_course[$i]%2==0)
                  {
                    $total_cost+=(1.5*4000);
                    echo (1.5*4000).'<br>';
                  } else
                  {
                    $total_cost+=(3*4000);
                    echo (3*4000).'<br>';
                  }
                }

                echo $total_cost;       

            }

            $sql= "SELECT updation FROM 
                 bank_slip
                 where sid IN (SELECT username
              from user_data
              where username like $username); 
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            $rows= mysqli_fetch_assoc($res);

            

            if($count==1)
            {
                echo "<br>bank slip updated";
            }else
            {
                echo "<br>bank slip not updated";
            }
                                       
                                       
        ?>

</body>


</html>