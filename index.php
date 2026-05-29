<?php



$request = $_SERVER['REQUEST_URI'];

if ($request == '/Banks') {
    require 'Banks.php';
}
elseif ($request == '/BanksDB') {
    require 'BanksDB.php';
}
elseif ($request == '/BanksPost') {
    require 'BanksPost.php';
}
else {
    echo json_encode(["error" => "Route not found"]);
}



?>
