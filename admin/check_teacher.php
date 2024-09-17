<?php

include('../includes/dbcon.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];
$phone = $_POST['contact'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];

$vPhone= "select contact from teacher where contact= '$phone' ";
$vPhone1 = "select phone from user_form where phone='$phone' and check_approval='-1'";
$phone_valid=mysqli_query($conn,$vPhone);
$phone_valid1=mysqli_query($conn, $vPhone1);

$vEmail= "select email from teacher where email= '$email' ";
$vEmail1 = "select email from user_form where email='$email' and check_approval='-1'";
$email_valid=mysqli_query($conn,$vEmail);
$email_valid1=mysqli_query($conn, $vEmail1);

if((mysqli_num_rows($phone_valid)>0) || (mysqli_num_rows($phone_valid1)>0)){
    
    header("location: login.php?error='Phone'");
}
else if((mysqli_num_rows($email_valid)>0) || (mysqli_num_rows($email_valid1)>0)){
    header("location: login.php?error='Email'");
} 
else{

    $sql = "INSERT INTO teacher (fname, lname, courseName, contact, email, user_name, password) VALUES ('$fname', '$lname', '$course', '$phone', '$email', '$username', '$pwd')";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        die('Insertion failed!');
    } else {
?>
        <script>
            alert('Data inserted successfully.');
            window.open('list_teacher.php', '_self');
        </script>
<?php
    }
}

    ?>