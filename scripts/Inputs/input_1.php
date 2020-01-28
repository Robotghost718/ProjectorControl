<?php
$command=escapeshellcmd("sudo python input_1.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>