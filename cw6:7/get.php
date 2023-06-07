<?php
require_once __DIR__ . '/common.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$result = [];

if(!empty($_GET['entry'])) {
   
    $data = getData();
    $entries = $data["entries"];
    $found = $entries[$_GET['entry']];
    $result = $found;
}

if(!empty($_GET['all'])) {
   
    $data = getData();
    $entries = $data["entries"];
    $result = $entries;
}

http_response_code(200);
echo json_encode($result);
?>