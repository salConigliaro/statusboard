<?php

header('Content-type: application/json');

$results = file_get_contents('http://www.apple.com/support/systemstatus/data/system_status_en_US.js');
echo $results;
?>