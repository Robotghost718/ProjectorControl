<?php
$command=escapeshellcmd("sudo python input_3.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>