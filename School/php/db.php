<?php 

$username = 'root';
$password = '';
$database = 'school';
$server = 'localhost';
$table = 'registration';



// echo strval($dob);

$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("" . $conn->connect_error);
}

?>