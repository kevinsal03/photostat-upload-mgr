<?php
#Configuration Script
$env = file_get_contents('switches/env', FALSE, NULL, -1);
$storage = "/mount/disk1/psup/" . $env . "/"; #Main File Storage
?>
