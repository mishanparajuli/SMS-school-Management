<?php
include('includes/dbcon.php');

if (isset($_POST['login_admin'])) {
    $username = $_POST['admin_uname'];
    $password = $_POST['admin_password'];
    echo $username;

    $sql = "SELECT * FROM admin WHERE user_name='$username' AND password='$password'";
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
        $_SESSION['id'] = $id;
        $_SESSION['uid'] = 1;
        header("location: admin/dashboard.php");
    }
}
?>