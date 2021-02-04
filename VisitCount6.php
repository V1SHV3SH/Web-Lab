<?php
print "<h1><center>welcome to my blogs</center></h1>";

$fname="count.txt";
$fp=fopen($fname,"r");
$visit=fscanf($fp,"%d");
fclose($fp);
$visit[0]++;
$fp=fopen($fname,"w");
fprintf($fp,"%d",$visit[0]);
fclose($fp);
print "total number of views:".$visit[0];
?>
