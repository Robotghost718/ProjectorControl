<?php
$command=escapeshellcmd("sudo python AV_Unmute.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>