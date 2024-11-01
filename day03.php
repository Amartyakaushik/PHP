<?php
    $str = array('m','i','s','s','i','s','s','i','p','p','i');
    
    $count1 = array_count_values($str);
    foreach($count1 as $char => $count){
        echo $char . " appears " . $count . " times.". "</br>";
    }
    
    for($i = 0; $i < 4; $i++){
        static $count = 1;
        for($k = 0; $k<$i; $k++){
            echo "&nbsp";
        }
        
        for($j = 0; $j < $i + 1; $j++){
            echo $count;
            $count += 1;
        }
        echo '</br>';
        
    }
    
    // for($i = 0; $i <11; $i++){
    //     $key = $str[i];
    //     $count = 1;
    //     for($j = 1; $j < 11; $j++){
    //         if($str[i] == $str[j]){
    //             $count += 1;
    //         }
    //     }
    //     echo $str[i] .'appears' . $count . ' times';
    // }

    setcookie("userName","John Carter",time()+ 86400 * 30, "/");
    if(isset($_COOKIE["userName"])){
        echo "Hello, " . $_COOKIE["userName"] . "<br>";
    }else{
        echo "Cookie is not set";
    }

    setcookie("userName","Divyanshu",time()+10, "/");
    if(isset($_COOKIE["userName"])){
        echo "Cookie updated: " . $_COOKIE["userName"];
    }else{
        echo "not set";
    }

    // setcookie("userName","Divyanshi",time()-10, "/");
?>
