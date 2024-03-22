<?php

require_once('db.php');
error_reporting(0);
if (!isset($_GET['id'])) {
    header('Location: registration_table.php');
    exit();
}

$id = $_GET['id'];
$fname = "";
$lname = "";
$dob = "";
$gender = "";
$grade = "";
$langs = "";
$father_name = "";
$f_qualification = "";
$f_mob = "";
$f_occupation = "";
$mother_name = "";
$m_qualification = "";
$m_mob = "";
$m_occupation = "";
$address = "";
$payment = "";


$sql = "select * from $table where id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $grade = $row['grade'];
        $langs = $row['langs'];
        $father_name = $row['father_name'];
        $f_qualification = $row['f_qualification'];
        $f_mob = $row['f_mob'];
        $f_occupation = $row['f_occupation'];
        $mother_name = $row['mother_name'];
        $m_qualification = $row['m_qualification'];
        $m_mob = $row['m_mob'];
        $m_occupation = $row['m_occupation'];
        $address = $row['address'];
        $payment = $row['payment'];
    }
}
?>

<?php 
// if($server['REQUEST_METHOD'] == 'POST')
if($_POST['submit'])
{
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $grade = $_POST['grade'];
   $langs = $_POST['langs'];
   $father_name = $_POST['father_name'];
   $f_qualification = $_POST['f_qualification'];
   $f_mob = $_POST['f_mob'];
   $f_occupation = $_POST['f_occupation'];
   $mother_name = $_POST['mother_name'];
   $m_qualification = $_POST['m_qualification'];
   $m_mob = $_POST['m_mob'];
   $m_occupation = $_POST['m_occupation'];
   $address = $_POST['address'];
   $payment = $_POST['payment'];


   echo $fname;
/* 
   $query = "update $table set fname='$fname', lname='$lname', dob='$dob', gender='$gender', grade='$grade', langs='$langs', 
   father_name='$father_name', f_qualification='$f_qualification', f_mob='$f_mob', f_occupation='$f_occupation', 
   mother_name='$mother_name', m_qualification='$m_qualification', m_mob='$m_mob', m_occupation='$m_occupation', 
   address='$address', payment='$payment' where id='$id'";

   $data = mysqli_query($conn, $query);

   if($data)
   {
    echo "<script>alert('Record updated')</script>";
   }
   else{
    echo "failed to update record";
   } */
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body style="background-color: rgb(198, 155, 198)">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rules.html">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admission_assistance.html">Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hostel.html">Hostel</a>
                    </li>
                </ul>
                <a href="login.html"><button class="btn btn-outline-danger" type="submit">Login</button></a>
            </div>
        </div>
    </nav>
    <!-- form -->
    <div class="container my-5">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <center>
                        <h2 class="my-4" style="color: red;">Student Registration Form</h2>
                    </center>
                    <h6 class="mx-4">Name of the Applicant:</h6>
                    <form action="update.php" method="post">
                        <div class="" style="display:none;">
                            <input type="number" name="id" id="" value="<?php echo "$id" ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>First name</label>
                                <input type="text" name="fname" value="<?php echo "$fname" ?>" class="form-control"
                                    placeholder="Enter first name">
                            </div>
                            <div class="col-md-6">
                                <label>Last name</label>
                                <input type="text" name="lname" value="<?php echo "$lname" ?>" class="form-control"
                                    placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob" value="<?php echo "$dob" ?>">
                            </div>
                            <div class="col-md-6">
                                <label>Gender: </label><br>
                                <input type="radio" value="male" name="gender" <?php if ($gender == 'male') {
                                    echo "checked ='checked'";
                                } ?>>Male
                                <input type="radio" name="gender" value="female" <?php if ($gender == 'female') {
                                    echo "checked='checked'";
                                } ?>>Female
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Grade</label>
                                <input type="text" class="form-control" name="grade" value="<?php echo "$grade" ?>">
                            </div>
                            <div class="col-md-6">
                                <label>Languages spoken</label>
                                <input type="text" class="form-control" name="langs" value="<?php echo "$langs" ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label>Parent's Information: </label>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <input type="text" name="father_name" class="form-control"
                                            placeholder="Father's name" value="<?php echo "$father_name" ?>">
                                        <input type="text" name="f_qualification" class="form-control"
                                            placeholder="Father's Qualification"
                                            value="<?php echo "$f_qualification" ?>">
                                        <input type="number" name="f_mob" class="form-control"
                                            placeholder="Father's Email & Phone no." value="<?php echo "$f_mob" ?>">
                                        <input type="text" name="f_occupation" class="form-control"
                                            placeholder="Father's Occupation" value="<?php echo "$f_occupation" ?>">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <input type="text" name="mother_name" class="form-control"
                                            placeholder="Mother's name" value="<?php echo "$mother_name" ?>">
                                        <input type="text" name="m_qualification" class="form-control"
                                            placeholder="Mother's Qualification"
                                            value="<?php echo "$m_qualification" ?>">
                                        <input type="number" name="m_mob" class="form-control"
                                            placeholder="Mother's Email & Phone no." value="<?php echo "$m_mob" ?>">
                                        <input type="text" name="m_occupation" class="form-control"
                                            placeholder="Mother's Occupation" value="<?php echo "$m_occupation" ?>">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Address : </label>
                                <textarea name="address" class="form-control"
                                    rows="3"><?php echo "$address" ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Payment Details:</label>
                                <input type="checkbox" name="payment" value="cash" <?php if ($payment == 'cash') {
                                    echo "checked='checked'";
                                } ?>>Cash
                                <input type="checkbox" name="payment" value="Check" <?php if ($payment == 'check') {
                                    echo "checked='checked'";
                                } ?>>Check
                                <input type="checkbox" name="payment" value="Card" <?php if ($payment == 'card') {
                                    echo "checked='checked'";
                                } ?>>Card
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card my-4">
                                    <div class="card-header">
                                        Terms and Conditions
                                    </div>
                                    <div class="card-body">
                                        1. I/We certify that the above information provided by me/us is correct.
                                        <br>
                                        2. I undertaken to submit all the documents in original for verification.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-danger" name="submit" id="button">Update Details</button>
                        </center>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="container my-5">
            <hr>
            <div class="row my-5">
                <div class="offset-md-1 col-md-2">
                    <h5>ABOUT US</h5>
                    <a href="#">
                        <p>Overview</p>
                    </a>
                    <a href="#">
                        <p>Principle's message</p>
                    </a>
                    <a href="#">
                        <p>Ranking & Awards</p>
                    </a>
                    <a href="#">
                        <p>School Calender</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <h5>ADMISSIONS</h5>
                    <a href="#">
                        <p>Overview</p>
                    </a>
                    <a href="#">
                        <p>Enquiry</p>
                    </a>
                    <a href="#">
                        <p>Registration</p>
                    </a>
                    <a href="#">
                        <p>Fee Structure</p>
                    </a>
                    <a href="#">
                        <p>Fee Payements</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <h5>CONTACT US</h5>
                    <p>Phone : <a href="#"> +91 8880006666</p></a>
                    <p> Email : <a href="#">sunshine@gmail.com</a></p>
                </div>
                <div class="col-md-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28858.754225890854!2d82.96201346713538!3d25.29263461954436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e322990b81d57%3A0x187c3decd33a8727!2sBanaras%20Hindu%20University!5e0!3m2!1sen!2sin!4v1703668906626!5m2!1sen!2sin"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <hr style="color: white;">
            <div class="bottom">
                Copyright @ International school, Varanasi. All rights reserved.
            </div>
        </div><br>
    </footer>
</body>

</html>

