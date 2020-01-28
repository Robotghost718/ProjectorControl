<?php
$command=escapeshellcmd("sudo python Volume_15.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>