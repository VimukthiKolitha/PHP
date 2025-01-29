<?php 

$Server = "localhost";
$Password = "";
$Username = "root";
$Database = "sliit";

$con = mysqli_connect($Server,$Username,$Password,$Database);

if($con)
{
    //display db details
    $display = "SELECT name,marks FROM students";

    //execute query
    $result = mysqli_query($con,$display);

    echo "<table border = '1px solid balck'>";
    echo "<th>"."name"."</th>";
    echo "<th>"."marks"."</th>";
    //display
    while($data = mysqli_fetch_array($result))
    {
       
        echo "<tr>";
        echo "<td>".$data["name"]."</td>";
        echo "<td>".$data["marks"]."</td>";
        echo "</tr>";

    }
    echo "</table>";
}else{
    echo "connection fail";
}

?>