<html>
<body>
Q.1) Create an array of 15 high temperatures, approximating the weather for a spring month, 
then find the average high temp, the five warmest high temps Display the result on the browser.
<form method="post" action="slip21.php">
enter 15  temp:
<input type="text"  name=t1>
<br>
<input type="submit"></form>
</body>
</html>
<?php
  $s=$_POST["t1"];
  $a=explode(" ",$s);
  
  arsort($a);
 echo("<br> highest 5 tempratures:");
  for($i=0;$i<5;$i++)
{
  echo("<br>".$a[$i]);
  $s=$s+$a[$i];
}
$av=$s/5;
echo("<br> average=".$av);


?>
