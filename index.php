<?php

echo "<center><h1>Prueba deploy y alta disponibilidad </h1</center><br/><br/> \n";

echo "Hi SRE, This is VERSION 1.0 - GREEN SCREEN ------   My Pod IP is : ";

echo "<p> <font color=blue>One line simple string in blue color</font> </p>";

echo file_get_contents('/etc/hostname');

 
?>
