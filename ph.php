<?php

function add($a,$b,$c)
{
  $c=$a+$b+$c;
echo($c);
}

$a=function_exists(add);
print($a);
 

?>