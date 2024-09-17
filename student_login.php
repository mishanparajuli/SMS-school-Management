<?php
include('includes/dbcon.php');

if (isset($_POST['login_student'])) {
    $username = $_POST['student_uname'];
    $password = $_POST['student_password'];
    echo $username;


    $sql = "SELECT * FROM student WHERE user_name='$username' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);
    print_r($row);

    if ($row < 1) {
?>
        <script>
            alert('Username or Password not matched !');
            window.open('login.php', '_self');
        </script>
<?php
    } else {
        $data = mysqli_fetch_assoc($res);
        $id = $data['id'];

        session_start();
        $_SESSION['uid'] = 3;
        $_SESSION['id'] = $id;
        header("location: admin/dashboard.php");
    }
}
?>