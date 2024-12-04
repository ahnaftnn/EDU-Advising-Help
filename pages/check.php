<?php 

  session_start();

  $count = $_SESSION['count'];
  $course=array();
  $course=$_SESSION['course'];
  for($i=0; $i<$count; $i++)
  {
    echo $course[$i];
  }
?>
