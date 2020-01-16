<?php
echo "Hello SRE, This is VERSION 1.0 - GREEN SCREEN ------   My Pod IP is : " .$_SERVER['SERVER_ADDR'];

echo file_get_contents('/etc/hostname');

 
?>
