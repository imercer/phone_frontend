<?php
session_start();

shell_exec('echo -e "AT+FMCLOSE" > /dev/ttyUSB0');
echo '<script>window.location.replace("/");</script>';

?>