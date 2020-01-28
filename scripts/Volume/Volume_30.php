<?php
$command=escapeshellcmd("sudo python Volume_30.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>