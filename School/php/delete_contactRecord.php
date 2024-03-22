<?php

require_once('db.php');
error_reporting(0);

$id = $_GET['id'];
$query = "delete from contact where id = '$id'";

$data = mysqli_query($conn,$query);


    header("Location: contact_table.php");
    exit();



?>