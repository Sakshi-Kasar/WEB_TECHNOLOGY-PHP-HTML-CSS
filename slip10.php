<html>
<body>
<form method="post" action="slip10.php">
    enter first no:<input type="text" name="t1"><br>
     enter second no:<input type="Text" name="t2"><br>
 enter choice:
a. Find mod of the two numbers. <br>
b. Find the power of first number raised to the second. <br>
c. Find the sum of first n numbers (considering first number as n) <br>
d. Find the factorial of second number.<br>
   
<input type="text" name="t3">
<input type="submit">
</form></body></html>
<?php
  $n1=$_POST["t1"];
  $n2=$_POST["t2"];
  $ch=$_POST["t3"];
switch($ch)
{
  case 1:$r=$n1%$n2;
               echo($r);
             break;
case 2:$k=1;
              for($i=1;$i<=$n2;$i++)
              $k=$k*$n1;
              echo("$k");
               break;
case 3:$k=0;
               for($i=1;$i<=$n1;$i++)
                $k=$k+$i;
               echo("$k");
               break;
case 4:$k=1;
               for($i=1;$i<=$n2;$i++)
                $k=$k* $i;
               echo("fact is $k");
               break;
}
?>