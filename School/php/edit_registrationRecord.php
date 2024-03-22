<?php

require_once('db.php');
error_reporting(0);

$id = $_GET['id'];
$query = "delete from $table where id = '$id'";

$data = mysqli_query($conn,$query);


    header("Location: registration_table.php");
    exit();
    // echo "record deleted from database";



?>