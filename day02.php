echo("Hello World! </br>");
$a = 23.2;
$name = "Amartya Kaushik";

$b = 23;
echo ($b." <br>" );
// Conditional statement
//----------Switch Statement-----------
$var = 1;
switch($var){
    case 1:
    echo("One </br>");
    break;
    case 2:
    echo("Two </br>");
    break;
    case 3:
    echo("Three </br>");
    break;
    case 4:
    echo("Four </br>");
    break;
    default:
    echo("Enter valid number </br>");
}
//--------if-elseif-else statement----------
if($var < 10){
    echo($var." is less than 10 </br>");
}elseif($var >12){
    echo($var." is greater than 12 </br>");
}else{
    echo("Nothing </br>");
}

//------Loops-------------
$arr = array(1,2,3,4,45);
foreach($arr as $values){
    echo($values. " ");
}
echo("</br>");

// function pass by reference
function passbyref(&$x){
    $x += $x;
    return $x;
}

$var = 23;
passbyref($var);
echo($var. "<br>");

// for each loop 
$something = array("hey" => "Greet",
                    "badhai hoo!" => "Wish");
foreach($something as $key => $values){
    echo($key." : ".$values);
    echo("<br>");
}

$arr = "Amartya";
echo($arr[1]."<br>");

// constants in array
define("arr2",[
    "a" => "apple",
    "b" => "bullu"
]);

const array1 = array("ab","adfa",'asdfsaf');
echo(array1[2]."<br>");
echo(arr2['a']."<br>");
