
<?php 
require_once('db.php');
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'POST')
// if($_POST['submit'])
{
    $id = $_POST['id'];
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


   $table = "registration";


   $query = "update $table set fname='$fname', lname='$lname', dob='$dob', gender='$gender', grade=$grade, langs='$langs', 
   father_name='$father_name', f_qualification='$f_qualification', f_mob=$f_mob, f_occupation='$f_occupation', 
   mother_name='$mother_name', m_qualification='$m_qualification', m_mob=$m_mob, m_occupation='$m_occupation', 
   address='$address', payment='$payment' where id=$id";

   $data = mysqli_query($conn, $query);

   header("Location: registration_table.php");
   exit();
}

?>
