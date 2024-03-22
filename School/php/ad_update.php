<?php
require_once('db.php');
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST["m_name"];
    $dob = $_POST["dob"];
    $grade = $_POST["grade"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $religion = $_POST["religion"];
    $nationality = $_POST["nationality"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $r_no = $_POST["r_no"];



    $table = "ad";


    $query = "update $table set full_name='$full_name',f_name='$f_name',m_name='$m_name', dob='$dob',grade=$grade,
    gender='$gender',address='$address',religion='$religion',nationality='$nationality',email='$email',phone=$phone,
    r_no=$r_no where id=$id";

    $data = mysqli_query($conn, $query);
    header("Location: addmission_table.php");
    exit();

    // if ($data) {
    //     echo "<script>alert('Record updated')</script>";
    // } else {
    //     echo "failed to update record";
    // }
}

?>