<?php 
$SERVER = "localhost";
$USERNAME = "root";
$DATABASENAME = "sliit";
$PASSWORD= "";

 $con = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASENAME);

   if($con)
   {
       echo "connected";
   }else{
       echo "not connected";
   }
?>