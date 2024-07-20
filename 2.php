<?php
$f=fopen("stud.txt","r");
if($f==false)
die("not found");
echo("student records:");
echo("<table border=1>");
echo("<tr><th>rno");
echo("<th>name");
echo("<th>os");
echo("<th>ds");
echo("<th>wt");
echo("<th>total");
echo("<th>per</tr>");
while(!feof($f))
{
  $s=fgets($f);
  $a=explode(" ",$s);
   echo("<tr><td>".$a[0]);
   echo("<td>".$a[1]);
   echo("<td>".$a[2]);
   echo("<td>".$a[3]);
   echo("<td>".$a[4]);
    $t=$a[2]+$a[3]+$a[4];
	$p=$t/3;
	echo("<td>".$t);
	echo("<td>".$p);
	echo("</tr>");
	
  
  }
	echo("</table>");
	?>
	
   
