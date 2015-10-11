<?php
session_start();
shell_exec('echo -e "ATA" > /dev/ttyUSB0');

echo '<script>window.location.replace("/ongoingcall.php");</script>';

?>