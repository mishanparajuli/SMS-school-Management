<?php
include('../includes/dbcon.php');
$id = $_GET['id'];
$sql = "DELETE FROM student WHERE id=$id";
$res = mysqli_query($conn, $sql);
if ($res) {
?>
    <script>
        alert('student deleted successfully');
        window.open('list_student.php?', '_self');
    </script>
<?php
} else {
?>
    <script>
        alert('student deletion failed');
    </script>
<?php
}
?>