<?php
include('includes/dbcon.php');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$id = $_GET['id'];

if ($id == 1) {
    $phone = $_POST['phone'];
    $sql = "INSERT INTO inquires (name, email, message, number) VALUES('$name', '$email','$message', '$phone')";
} else //id==2
{
    $sql = "INSERT INTO inquires (name, email, message) VALUES('$name', '$email','$message')";
}
$res = mysqli_query($conn, $sql);
if (!$res) {
    die("failed");
} else {
?>
    <script>
        alert('message sent successfully.');
        window.open('index.php?', '_self');
    </script>
<?php
}

?>