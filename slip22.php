<html>
<body>
a) Insert an element in queue 
b) Delete an element from queue 
c) Display the contents of queue
<form mathod="post" action="#">
enter choice:
<input type="text" name="t1">
<br>
<input type="submit">
</form></body></html>

<?php
$a=array(12,23,34,45);
$ch=$_POST["t1"];
switch($ch)
{
  case 1:array_unshift($a,55);
                print_r($a);
                break;
 case 2:array_shift($a);
               print_r($a);
                break;
 case 3:print_r($a);
               break;
}
?>