<?php
include('includes/dbcon.php');

    $usertype = $_POST['usertype'];
    $username = $_POST['username'];
    $password = $_POST['password'];

if($usertype=='admin'){
    $sql = "SELECT * FROM admin WHERE user_name='$username' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);
    print_r($row);
    echo $username;
    echo $usertype;

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
else if($usertype=='teacher'){
    $sql = "SELECT * FROM teacher WHERE user_name='$username' AND password='$password'";
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
        $_SESSION['uid'] = 2;
        $_SESSION['id'] = $id;
        header('location: admin/dashboard.php');
    }
}
else if($usertype=='student'){
    $sql = "SELECT * FROM student WHERE user_name='$username' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);
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
else{
    echo "Unable to login! Something went wrong.";
}
?>