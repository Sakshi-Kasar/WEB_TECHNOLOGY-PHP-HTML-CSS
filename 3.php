<html>
<body>
<form method="post" action="3.php">
enter first file:<input type="text" name="t1">
enter second file:<input type="text" name="t2">
<input type="submit">
</form></body></html>

<?php
$n1=$_POST["t1"];
$n2=$_POST["t2"];
$f1=fopen($n1,"r");
$f2=fopen($n2,"w");    
if($f1==false )
{
 die("file not found");
 }
 while(!feof($f1))
 {
      $s1=fgets($f1);
      fputs($f2,$s1);
	  }
	  
	  echo("copy successs");
	  
	  ?>
	  





