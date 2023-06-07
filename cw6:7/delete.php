<?php
require_once __DIR__ . '/common.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$result['status'] = '';

$method = $_SERVER['REQUEST_METHOD'];
if ('DELETE' === $method) {
parse_str(file_get_contents('php://input'), $_DELETE);
}
if(!empty($_DELETE['id'])) {

    $data = getData();
    $entries = $data["entries"];
    unset($data["entries"][$_DELETE['id']]);
    setData($data);
    $result['status'] = 'success';
}

http_response_code(200);
echo json_encode($result);
?>