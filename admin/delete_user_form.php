<?php
$id = $_GET['id'];
echo $id;
include('../includes/dbcon.php');
$sql = "UPDATE user_form SET  check_approval = 0 WHERE id = " . $id . "";
$res = mysqli_query($conn, $sql);
if (!$res) {
    die("faild to reject request!");
} else {

?>
    <script>
        alert('User request rejected.');
        window.open("user_form.php", "_self");
    </script>
<?php
}
?>