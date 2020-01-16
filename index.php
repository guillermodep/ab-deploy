<?php

echo 'Prueba deploy y alta disponibilidad';

echo "Hi SRE, This is VERSION 1.0 - GREEN SCREEN ------   My Pod IP is : ";

echo file_get_contents('/etc/hostname');

 
?>
