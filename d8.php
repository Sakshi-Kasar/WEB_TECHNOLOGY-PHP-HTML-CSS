<?php
echo("<center>");
echo("<table border=2 height=100 width=300>");
for($i=0;$i<8;$i++)
{
echo("<tr>");

  for($j=0;$j<8;$j++)
{
    if(($i+$j)%2==0)
   echo("<td style='background-color:black'>&nbsp;&nbsp;&nbsp;</td>");
  else
  echo("<td>&nbsp;&nbsp;&nbsp;</td>");
}
  
echo("</tr>");
}
echo("</table>");
?>