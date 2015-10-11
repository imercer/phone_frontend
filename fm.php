<?php
session_start();
$freq = $_POST["freq"];

shell_exec('echo -e "AT+FMOPEN=0" > /dev/ttyUSB0');
shell_exec('echo -e "AT+FMFREQ='.$freq.'" > /dev/ttyUSB0');

echo '<script>window.location.replace("/");</script>';

?>