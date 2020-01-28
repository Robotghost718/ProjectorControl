<?php
$command=escapeshellcmd("sudo python Volume_70.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>