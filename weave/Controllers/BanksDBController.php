<?php

namespace Weave\Controllers;
use Lacebox\Sole\Cobble\ConnectionManager;

$pdo = ConnectionManager::getConnection();

class BanksDBController
{
public function banksDB()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // $servername = "localhost";
    // $username = "root";
    // $dbname = "demi_db";
    // $password = "";

    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);


// $host = getenv("MYSQLHOST");
// $user = getenv("MYSQLUSER");
// $password = getenv("MYSQLPASSWORD");
// $db = getenv("MYSQLDATABASE");
// $port = getenv("MYSQLPORT");

// $conn = new mysqli($host, $user, $password, $db, $port);


//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
    
    $sql = "select * from banks";
    
    $result = $pdo->query($sql);

    $result_array = [];

    // Process the result set
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $result_array[] = [
                "id" => $row["id"],
                "name" => $row["name"],
                "code" => $row["sort_code"],
                "address" => $row["address"],
                "NIP_code" => $row["NIP_code"]
            ];
    }
    } else {
        echo "0 results";
    }


    header('Content-Type: application/json; charset=utf-8');
    return [ json_encode($result_array)];

}

else {
    return [" I'm not collecting any info at the moment"];
    exit;
}
   
}

}