<?php
    
    function test($p,$i)
    {
        echo 'hellow <br>';
        
        return $p + $i;
        
    }
    $sum = test(20,40);

    echo $sum;
?>