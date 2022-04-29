<?php
echo date('d.m.o H:i',mktime(0,0,time()+60*60*3,1,1,1970));
echo "<br>";
echo mt_rand(0,1000);
?>