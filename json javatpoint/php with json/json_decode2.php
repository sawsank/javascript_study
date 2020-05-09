<?php  
$json2 = '{"firstName" : "Rahul", "lastName" : "Kumar", "email" : "rahul@gmail.com"}';    
var_dump(json_decode($json2, true));  
?>  
/*Output

array(3) { 
["firstName"]=> string(5) "Rahul" 
["lastName"]=> string(5) "Kumar" 
["email"]=> string(15) "rahul@gmail.com" 
}*/