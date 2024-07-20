<html>
<body>
<form method="post"  action="#">
enter choice:
a. Reverse the order of each element’s key-value pair.<br>
b. Traverse the element in an array in random order.<br>
c. Convert the array elements into individual variables.<br>
d. Display the elements of an array along with key. <br>
<input type="text" name="t1">
<br>
<input type="submit">
</form></body></html>
<?php
$ch=$_POST["t1"];
$a=array("Sagar"=>"101","Leena"=>"102");

switch($ch)
{
case 1:$b=array_reverse($a);
               print_r($b);
               break;
case 2:shuffle($a);
               print_r($a);break;
case 3:extract($a);
                echo($Sagar."<br>");
                 echo($Leena);
                break;
case 4:foreach($a as $k=>$v)
{
             echo("<br> $k => $v");
}

}
?>