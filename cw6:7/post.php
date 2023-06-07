<?php

require_once __DIR__ . '/common.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$result['status'] = 'failed';

if(!empty($_POST['uploadPath']) && 
   !empty($_POST['fileName']) && 
   !empty($_POST['poster']) && 
   !empty($_POST['header']) && 
   !empty($_POST['paragraph']) && 
   !empty($_POST['linkTekst']) && 
   !empty($_POST['href'])
   ) {

    $data = getData();

    $data["entries"][randomStr()] = [
        "uploadPath" => $_POST['uploadPath'],
        "fileName" => $_POST['fileName'],
        "poster" => $_POST['poster'],
        "header" => $_POST['header'],
        "paragraph" => $_POST['paragraph'],
        "linkTekst" => $_POST['linkTekst'],
        "href" => $_POST['href']
    ];
    setData($data);
    $result['status'] = 'success';
}

if(
   !empty($_POST['header']) && 
   !empty($_POST['paragraph']) && 
   !empty($_POST['linkTekst']) && 
   !empty($_POST['href'])
   ) {

    $data = getData();

    $data["entries"][randomStr()] = [
        "uploadPath" => "files",
        "fileName" => "embed.mp4",
        "poster" => "https://lf16-tiktok-common.ibytedtos.com/obj/tiktok-web-common-us/developers/static/images/login-kit-c763a29a476a2563ccca9ff34e9b8907.jpg",
        "header" => $_POST['header'],
        "paragraph" => $_POST['paragraph'],
        "linkTekst" => $_POST['linkTekst'],
        "href" => $_POST['href']
    ];
    setData($data);
    $result['status'] = 'success';
}

http_response_code(200);
echo json_encode($result);
?>