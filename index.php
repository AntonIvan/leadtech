<?php
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';
require_once 'App/bootstrap.php';

echo date("H:i:s")."\n";
$new = new GetLead();
$new->get();
echo date("H:i:s")."\n";




?>