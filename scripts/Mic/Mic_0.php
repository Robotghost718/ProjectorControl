<?php
$command=escapeshellcmd("sudo python Mic_0.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>