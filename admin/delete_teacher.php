<?php
include('../includes/dbcon.php');
$id = $_GET['id'];
$sql = "DELETE FROM teacher WHERE id=$id";
$res = mysqli_query($conn, $sql);
if ($res) {
?>
    <script>
        alert('teacher deleted successfully');
        window.open('list_teacher.php?', '_self');
    </script>
<?php
    header('list_teacher.php');
} else {
?>
    <script>
        alert('teacher deletion failed');
    </script>
<?php
}
?>