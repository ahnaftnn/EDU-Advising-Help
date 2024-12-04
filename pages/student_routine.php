
<html>
    <head>
    <link rel="stylesheet" href="../style.css"/>
    <style>
      table,tr,td,th{
        border-collapse: collapse;
        margin-left:auto;
        margin-right:auto;
        text-align:center;
        margin-top: 10%;
        padding-left: 10px;
        padding-right: 10px;
      }
    </style>

    </head>

  <body>
  <?php include('../connections/header.php'); ?>
 
  <div class="routine">
     
    <table border=1 class="text-center">
    <tr> 
    <td>     </td>
    <th>8:30 AM </th>
    <th>9:30 AM </th>
    <th>10:00 AM </th>
    <th>11:30 AM </th>
    <th>1:30 AM </th>
    <th>3:00 AM </th>
    <th>4:30 AM </th>
    </tr>

    <tr> 
    <th>Sunday</th>
    <td>   <?php
    session_start();
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Sunday' AND
          time like '8:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>    
            </td>

            <td>  <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Sunday' AND
          time like '9:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>       
            </td>

    <td>  <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Sunday' AND
          time like '10:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>       
            </td>


    <td>    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Sunday' AND
          time like '11:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>  
            </td>


    <td>  <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Sunday' AND
          time like '1:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>       
            </td>


    <td>    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Sunday' AND
          time like '3:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>     </td>


    <td>    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Sunday' AND
          time like '4:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>     </td>
    </tr>

    <tr> 
    <td>Monday</td>
    <td> <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Monday' AND
          time like '8:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>      
            </td>

    <td> <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Monday' AND
          time like '9:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>      
            </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Monday' AND
          time like '10:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Monday' AND
          time like '11:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Monday' AND
          time like '1:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Monday' AND
          time like '3:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Monday' AND
          time like '4:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>
    </tr>

    <tr> 
    <td>Tuesday</td>
    <td> <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Tuesday' AND
          time like '8:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>      
            </td>
    
            <td> <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Tuesday' AND
          time like '9:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>      
            </td>

    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Tuesday' AND
          time like '10:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Tuesday' AND
          time like '11:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Tuesday' AND
          time like '1:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Tuesday' AND
          time like '3:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Tuesday' AND
          time like '4:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>
    </tr>

    <tr> 
    <td>Wednesday</td>
    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Wednesday' AND
          time like '8:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>

    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Wednesday' AND
          time like '9:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>

    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Wednesday' AND
          time like '10:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>      
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Wednesday' AND
          time like '11:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?> </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Wednesday' AND
          time like '1:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Wednesday' AND
          time like '3:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Wednesday' AND
          time like '4:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>     
    </td>
    </tr>

    <tr> 
    <td>Thursday</td>
    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Thursday' AND
          time like '8:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>

    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Thursday' AND
          time like '9:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>

    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Thursday' AND
          time like '10:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Thursday' AND
          time like '11:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Thursday' AND
          time like '1:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Thursday' AND
          time like '3:00' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>


    <td>       
    <?php
    $count_course = $_SESSION['count'];
    $course=array();
    $course=$_SESSION['course'];   
      
    for($i=0; $i<$count_course; $i++)
       {
        $temp=$course[$i];
        
         $sql= "SELECT course,faculty,room FROM routine 
          where day like 'Thursday' AND
          time like '4:30' AND
          (course like '$temp');
            ";
            
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty'];
              $room= $rows['room'];
              echo $courseid.'('.$room.')';   
            } 
        }
          
            ?>
    </td>
    </tr>   
</table>
      
     
     </div>
  <div class="faculty">
  <?php 
  
  $count_course = $_SESSION['count'];
  $course=array();
  $course=$_SESSION['course'];   
    
  for($i=0; $i<$count_course; $i++)
     {
      $temp=$course[$i];

  $sql= "SELECT course,faculty_name FROM course_faculty
WHERE course IN (SELECT course from routine 
                  WHERE (course like '$temp')); 
            ";
            include('../connections/mysql_connect.php'); 
            $count=mysqli_num_rows($res);
            if($count>0)
            {
              
              $rows= mysqli_fetch_assoc($res);
              $courseid= $rows['course'];
              $faculty= $rows['faculty_name'];
              echo $courseid." : ".$faculty."<br>";
              
            } 
     }
            ?> 
     
  </div>

   <?php include('../connections/footer.php'); ?>


  </body>
</html>