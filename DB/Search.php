<?php 
$Server = "localhost";
$Password = "";
$Username = "root";
$Database = "sliit";

$con = mysqli_connect($Server,$Username,$Password,$Database);

if($con)
{
    $name = $_GET['name'];

    $search = "SELECT name FROM students WHERE name = '$name'";
  
    $res = mysqli_query($con,$search);

    echo "<table border = '1px solid balck'>";
    echo "<th>"."name"."</th>";
    //display
    while($data = mysqli_fetch_array($res))
    {
       
        echo "<tr>";
        echo "<td>".$data["name"]."</td>";
        echo "</tr>";

    }
    echo "</table>";

}else{

    echo "Error to connect";
}
?>