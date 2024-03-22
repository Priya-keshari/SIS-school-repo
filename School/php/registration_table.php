<?php 


require_once('db.php');
$query = "select * from $table";
$result = mysqli_query($conn,$query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration data</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <div class="card"style="margin-top: 100px;">
            <div class="card-header" style="background-color: teal; color: white;">
                <center>
                    <h2>Student Registration Data</h2>
                </center>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial no.</th>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">dob</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Languages</th>
                            <th scope="col">Address</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['lname']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['grade']; ?></td>
                            <td><?php echo $row['langs']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['payment']; ?></td>
                            <td>
                            <a href="update_registrationRecord.php?id=<?php echo $row['id'] ?>">
                                     <i class="fa fa-pencil fa-lg" title="Edit" style="color: blue;"></i>
                               <a href="edit_registrationRecord.php?id=<?php echo $row['id']?>"> 
                                     <i class="fa fa-trash fa-lg" title="Delete" style="color: red;"></i></a>
                            </td>
                            </tr>
                            <?php

                            }

                            ?>
                    
                    </tbody>
                </table>
            </div>
        </div><br>
        <a href="/school/index.html"><button class="btn btn-outline-danger">Go Back</button></a>
    </div><br>
  
</body>

</html>