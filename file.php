<?php
$f=fopen("stud1.txt","r");
 echo("<table border=1>");
  echo("<tr><th> rno <th>name<th> m1 <th>m2 <th> m3 <th> per</tr>");
  $s=0;
while(!feof($f))
{
  $s1=fgets($f);
  $a=explode(" " ,$s1);
  echo("<tr>");
  echo("<td>".$a[0]);
  echo("<td>".$a[1]);
  echo("<td>".$a[2]);
  echo("<td>".$a[3]);
  echo("<td>".$a[4]);
  $s=$a[2]+$a[3]+$a[4];
  $p=$s/3;
  echo("<td>".$p);
  echo("</tr>");
}
echo("</table>");
echo("<br>".filesize("stud.txt"));
?>