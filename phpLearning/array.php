<?php 
  
  $num = array(20,30,40,50,60,70);

  //using echo you can't print array
     //echo $num;
  print_r ($num);

  //or

  for($i = 0 ; $i < 6; $i++)
  {
    echo $num[$i]."<br>";
  }

  //or you can use for each
  foreach($num as x)
  {
    echo $x." ";
  }
?>