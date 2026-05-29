<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$servername = "localhost";
    $username = "root";
    $dbname = "demi_db";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 $name = $_POST['name'];
   $code = $_POST['sort_code'];
   $address = $_POST['address'];
   $nip_code = $_POST['NIP_code'];
   
   $sql = "INSERT INTO banks (name, sort_code, address, NIP_code) VALUES ('$name', '$code', '$address', '$nip_code')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}






else {
    echo " Just give me the info in a post request";
    exit;
}
?>