<?php
$command=escapeshellcmd("sudo python Volume_80.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>