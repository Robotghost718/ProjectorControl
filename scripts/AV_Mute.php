<?php
$command=escapeshellcmd("sudo python AV_Mute.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>