<?php
include('../includes/dbcon.php');
$id = $_GET['id'];

$data = "SELECT * FROM user_form WHERE id=" . $id . "";
$result = mysqli_query($conn, $data);
$row = mysqli_fetch_assoc($result);

$fname = $row['fname'];
$lname = $row['lname'];
$contact = $row['phone'];
$email = $row['email'];
$faculty = $row['courseName'];
$username = $row['username'];
$password = $row['password'];
$user_type = $row['user_type'];

if ($user_type == "student") {
    $sql = "INSERT INTO student (fname, lname, contact, email, courseName, user_name, password ) VALUES ('$fname', '$lname', '$contact', '$email', '$faculty', '$username', '$password')";
}
if ($user_type == "teacher") {
    $sql = "INSERT INTO teacher (fname, lname, contact, email, courseName, user_name, password ) VALUES ('$fname', '$lname', '$contact', '$email', '$faculty', '$username', '$password')";
}
$res = mysqli_query($conn, $sql);
if (!$res) {
    die("user approval failed");
} else {
    $query = mysqli_query($conn, "UPDATE user_form SET check_approval=1 WHERE id=" . $id . "");
    if (!$query) {
        die('set approval id failed');
    }

?>
    <script>
        alert('User request approved.');
        window.open("user_form.php", "_self");
    </script>
<?php
}
