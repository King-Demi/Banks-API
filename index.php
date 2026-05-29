<?php
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);
$path = trim($path, '/');

switch ($path) {
    case '':
    case 'banks':
        require 'Banks.php';
        break;
    case 'banks/db':
        require 'BanksDB.php';
        break;
    case 'banks/post':
        require 'BanksPost.php';
        break;
    default:
        http_response_code(404);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(["error" => "Route not found"]);
        break;
}
