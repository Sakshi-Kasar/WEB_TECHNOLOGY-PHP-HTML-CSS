<?php

$a=array("sai"=>"16" ,"am"=>"14","aa"=>"15");
asort($a);
print_r($a);
ksort($a);
print_r($a);

arsort($a);
print_r($a);
krsort($a);
print_r($a);


?>