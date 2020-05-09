<?php  
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);  
echo json_encode($arr);  
?>
/*
The json_encode() function returns the JSON representation of a value. In other words, it converts PHP variable (containing array) into JSON.

Syntax:
string json_encode ( mixed $value [, int $options = 0 [, int $depth = 512 ]] )  


Output

{"a":1,"b":2,"c":3,"d":4,"e":5}*/

