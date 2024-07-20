<?php
echo("<center>");
echo("<table border=2 height=600 width=600>");
for($i=1;$i<=8;$i++)
  {
	  echo("<tr>");
  for($j=1;$j<=8;$j++)
  {
   if(($i%2==1 && $j%2==0) ||($i%2==0 && $j%2==1))
    echo(" <td  style='background-color:black'>&nbsp;&nbsp;&nbsp;</td>");
	else
	echo("<td>&nbsp;&nbsp;&nbsp;</td>");
	}
	echo("</tr>");
  }
	echo("</table>");
	?>