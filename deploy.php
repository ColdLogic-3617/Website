<?php
$LOCAL_REPO         = "/home/gappleto/pub";
$output = shell_exec("cd {$LOCAL_REPO} && git pull");

die(date('H:i:s m-d-Y', $_SERVER['REQUEST_TIME']) . "<br><pre>$output</pre>");

?>
