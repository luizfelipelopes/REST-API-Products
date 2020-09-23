<?php
/**
 * View responsible for show the result of API requisitions. 
 * */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// Verify Requisition's Url
if (!isset($getUrl[1]) || empty($getUrl[1])) :
    http_response_code(404);
    echo json_encode('url not found');
    die;
endif;

// Verify Requisition's Url
if ($getUrl[1] != 'product' && $getUrl[1] != 'category') :
    http_response_code(404);
    echo json_encode('url not found');
    die;
endif;

$api = new Api();

// Get to action to be executed in API
switch ($getUrl[2]) {
    case 'read':
        if ($getUrl[1] == 'category') {
            $api->actionReadCategories();
            exit;
        }

        if (!empty($getUrl[3])) :
            $api->actionReadOne($getUrl[3]);
        else :
            $api->actionRead();
        endif;
        break;

    case 'create':
        $data = json_decode(file_get_contents('php://input'));
        $api->actionCreate($data);
        break;

    case 'update':
        $data = json_decode(file_get_contents('php://input'));
        $api->actionUpdate($data);
        break;

    case 'delete':
        if (!empty($getUrl[3])) :
            $api->actionDelete($getUrl[3]);
        endif;

    case 'search':
        if (!empty($getUrl[3])) :
            $api->actionSearch($getUrl[3]);
        endif;
        break;

    default:
        http_response_code(404);
        echo json_encode('url not found');
        break;
}
