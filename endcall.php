<?php
session_start();
$number = $_POST["number"];
$_SESSION["calling"] = $number;

shell_exec('echo -e "ATH" > /dev/ttyUSB0');

echo '<script>window.location.replace("/");</script>';

?>