<html>
<body>
a) Insert an element in queue <br>
b) Delete an element from queue <br>
c) Display the contents of queue<br>
<form method="post" action="#">
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
 case 3:foreach($a as $n)
               echo($n ." ");
               break;
}
?>