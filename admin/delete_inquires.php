<?php
include('../includes/dbcon.php');
$id = $_GET['id'];
$sql = "DELETE FROM inquires WHERE id=" . $id . "";
$res = mysqli_query($conn, $sql);
?>
<?php

if (!$res) {
    die('failed to delete!');
} else {
?>
    <script>
        alert('inquiry deleted successfully');
        window.open('inquires.php?', '_self');
    </script>
<?php
}
?>