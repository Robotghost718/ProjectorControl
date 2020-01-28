<?php
$command=escapeshellcmd("sudo python sound_up.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>