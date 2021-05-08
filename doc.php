<?php
require("vendor/autoload.php");
$openapi = \OpenApi\scan('/home/lj/laravel_api/app/Http/Controllers');
header('Content-Type: application/x-yaml');
echo $openapi->toYaml();
