<?php
$a=array(1,2,3,4,5,6,7,8,4);
function even($n)
{
  if( ($n%2)==0)
  return true;
 else
 return false;
}
$a=array_filter($a,"even");
print_r($a);
?>
