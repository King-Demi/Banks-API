<?php

namespace Weave\Controllers;
use Lacebox\Sole\Cobble\ConnectionManager;

$pdo = ConnectionManager::getConnection();

class BanksPostController
{
public function banksPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
   $code = $_POST['sort_code'];
   $address = $_POST['address'];
   $nip_code = $_POST['NIP_code'];
   
   $sql = "INSERT INTO banks (name, sort_code, address, NIP_code) VALUES ('$name', '$code', '$address', '$nip_code')";
    
    if ($pdo->query($sql) === TRUE) {
        return ["New record created successfully"];
    } else {
        return ["Error: " . $sql . "<br>" . $pdo->error];
    }



}






else {
    return [ " Just give me the info in a post request"];
    exit;



        }
    }

}
    