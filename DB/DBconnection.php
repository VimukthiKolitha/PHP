<?php
  
    $Server = "localhost";
    $Password = "";
    $Username = "root";
    $Database = "sliit";
  
    $con = mysqli_connect($Server,$Username,$Password,$Database);
  
    if($con)
    {
      echo "connected";

     //catch data coming from get method
    $name = $_GET['name'];
    $marks = $_GET['marks'];

      //send data
      $insertdata = "INSERT INTO students VALUES('$name','$marks')";
      
      //execute query
      $result = mysqli_query($con,$insertdata);
      if($result)
      {
        echo "<br>";
        echo "data sent success";
      }else{
        echo "<br>";
        echo "data can't send";
      }
  
    }else{
      echo "not connected";
    }
?>
