<?php

//get file details
 $file_name = $_FILES['cv']['name'];
 $file_format = $_FILES['cv']['type'];
 $file_tem = $_FILES['cv']['tmp_name'];
 $file_size = $_FILES['cv']['size'];

 //file details print
 echo "File name: "."$file_name"."<br>";
 echo "File format: "."$file_format"."<br>";
 echo "File location: "."$file_tem"."<br>";
 echo "File size: "."$file_size"."<br>";


 //broke file name in to two parts (file name and file type) save in $part
 $part = explode(".",$file_name);

 //get last part (type)
 $format = end($part);

 $types = array('png','pdf','jpg');

 //check if file is png','pdf','jpg'
  if(in_array($format,$types))
  {
    //check file size lesthan 5mb
    if($file_size < 500000)
    {
                        //upload path   new file name
        $new_file_path = "files/"." $file_name";

             //              old file path   new file path 
           move_uploaded_file("$file_tem","$new_file_path");


           //image display
           echo "<img src='$new_file_path'>";

         echo "file moved success...!";
    }else{
        echo "file too large";
    }
  }else{
    echo "wrong file type";
  }


?>