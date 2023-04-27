<?php

/**
 * https://www.php.net/manual/en/curl.examples-basic.php
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$endpoint = 'https://jsonplaceholder.typicode.com/comments?postId=3';
$res = file_get_contents($endpoint);

echo $res;