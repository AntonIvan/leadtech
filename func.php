<?php
function  handler($lead, $category) {
    $file = 'log.txt';
    $info = $lead." | ".$category." | ".date("H:i:s")."\n";
    file_put_contents($file, $info, FILE_APPEND);
    sleep(2);
}

handler($argv[1], $argv[2]);
