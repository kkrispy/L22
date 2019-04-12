<?php
$array = array(1,3,5,7,9);
echo max_array($array);

function max_array($arr){

$max_number = $arr[0];
foreach($arr as $a){
 if ($a > $max_number){
 $max_number = $a;
 }
}
return $max_number;
}
 ?>
