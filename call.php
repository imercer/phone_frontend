<?php
session_start();
$number = $_POST["number"];
$_SESSION["calling"] = $number;

shell_exec('echo -e "ATD'.$number.';" > /dev/ttyUSB0');

echo '<script>window.location.replace("/ongoingcall.php");</script>';

?>