
<?php

    include('../includes/dbcon.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $phone = $_POST['contact'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pwd = $_POST['password'];
    $id = $_GET['id'];


    $vPhone= "select contact from student where contact= '$phone' and id<>'$id'";
    $vPhone1 = "select phone from user_form where phone='$phone' and check_approval='-1'";
    $phone_valid=mysqli_query($conn,$vPhone);
    $phone_valid1=mysqli_query($conn, $vPhone1);

    $vEmail= "select email from student where email= '$email' and id<>'$id'";
    $vEmail1 = "select email from user_form where email='$email' and check_approval='-1'";
    $email_valid=mysqli_query($conn,$vEmail);
    $email_valid1=mysqli_query($conn, $vEmail1);

    if((mysqli_num_rows($phone_valid)>0) || (mysqli_num_rows($phone_valid1)>0)){

        header("location: update_student.php?error='Phone'&id='$id'");
    }
    else if((mysqli_num_rows($email_valid)>0) || (mysqli_num_rows($email_valid1)>0)){

        header("location: update_student.php?error='Email'&id=$id");
    } 
    else{
        $sql = "update student set fname='$fname', lname='$lname', contact='$phone', email='$email', courseName='$course', user_name='$uname', password='$pwd' where id='$id' ";
        $res = mysqli_query($conn, $sql);
    
        if (!$res) {
            die('Updation failed!');
        } else {
    ?>
            <script>
                alert('Data Updated successfully.');
                window.open('list_student.php', '_self');
            </script>
    <?php
        }
    }



?>
