<?php
    $employee = array(
        array("amar", "mrng", 10),
        array("char", "Night", 12),
        array("moh", "mrng", 19)
    );

    $len = count($employee);
    for($i = 0; $i < $len; $i++){
        echo $employee[$i][0]. " worked ". ($employee[$i][2]) * 7 . " hours in whole week <br>";
    }
?>