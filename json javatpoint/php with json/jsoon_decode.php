<?php  
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';  
var_dump(json_decode($json, true));//true means returned object will be converted into associative array  
?>
/*
Syntax: 
mixed json_decode ( string $json [, bool $assoc = false [, int $depth = 512 [, int $options = 0 ]]] )  

Output

array(5) {
    ["a"] => int(1)
    ["b"] => int(2)
    ["c"] => int(3)
    ["d"] => int(4)
    ["e"] => int(5)
}
*/