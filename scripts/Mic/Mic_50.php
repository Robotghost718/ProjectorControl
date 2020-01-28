<?php
$command=escapeshellcmd("sudo python Mic_50.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>