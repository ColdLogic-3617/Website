<?php
// Set Variables
$LOCAL_ROOT         = "/home/gappleto";
$LOCAL_REPO_NAME    = "pub";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "https://github.com/ColdLogic-3617/Webiste.git";
$BRANCH             = "master";

$output = shell_exec("cd {$LOCAL_REPO} && git pull");

die(date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']) . "<br><pre>$output</pre>");

?>
