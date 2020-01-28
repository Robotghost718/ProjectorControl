<?php
$command=escapeshellcmd("sudo python Mic_30.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>