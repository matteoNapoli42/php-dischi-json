<?php
$json_disks = file_get_contents('disks.json');
header('Content-Type: application/json');
echo $json_disks;
