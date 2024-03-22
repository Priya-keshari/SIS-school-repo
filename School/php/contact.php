<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body style="background-color: rgb(242, 235, 235);">
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


    <?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mob = $_POST["mob"];
    $comment = $_POST["comment"];

    $username = 'root';
    $password = '';
    $database = 'school';
    $server = 'localhost';
    $table = 'contact';

    $conn = new mysqli($server, $username, $password, $database);

    if ($conn->connect_error) {
        die("" . $conn->connect_error);
    } else {

        $query = "insert into $table (name, email, mob, comment)
         values ('$name','$email','$mob','$comment')";

        $result = $conn->query($query);
        header("Location: contact_table.php");

    }

    ?>


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