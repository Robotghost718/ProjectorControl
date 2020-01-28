<?php
$command=escapeshellcmd("sudo python Volume_85.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>