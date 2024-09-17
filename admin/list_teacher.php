<?php include('header.php') ?>

<?php
include('../includes/dbcon.php');
$id = $_SESSION['id'];
if($uid == 2){
    $sql = "select * from teacher where id=$id";
}
else if($uid == 3){
    $sql = "select * from student where id=$id";
    
}
else{
    $sql = "select * from admin where id=$id";
}

$res = mysqli_query($conn, $sql);
if(!$res){
    echo "$uid";
    echo "$id";
    die("query failed");
}
else{
    $row = mysqli_fetch_assoc($res);
    $user = $row['fname'];
}


?>

<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="dashboard.php">Back</a>
            </div><!-- /.col -->
            <div class="col-sm-4 text-center">
            <h4><strong>WELCOME <?php echo strtoupper($user); ?> </strong></h4>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><?php echo $user ?></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="text-dark">All Teachers</h1>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container pb-5">
<div class="m-3">
        <form action="" method="POST">
            <b>select Faculty</b>
            <select id="faculty" onchange="searchByFaculty()">
            <option disabled selected hidden>Select Faculty</option>
                <option>Bsc.CSIT</option>
                <option>BCA</option>
                <option>BIM</option>
                <option>BBS</option>
            </select>
            <b>enter Name</b>
            <input type="text" id="name" placeholder="Name" onkeyup="searchByName()">

        </form>
    </div>


    <script type="text/javascript" src="filterResult.js"></script>    


    <div class="table-responsive">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Faculty</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <?php if($uid == 1){ ?>
                        <th>UserName</th>
                        <th>Password</th>
                        <th>Update</th>
                        <th>Delete</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>


                <?php
                include('../includes/dbcon.php');
                $sql = "SELECT * FROM teacher";
                $res = mysqli_query($conn, $sql);

                if (mysqli_num_rows($res) < 1) {
                    echo "<tr class=\"text-center\">";
                    echo "<td colspan=\"7\">No teacher added</td>";
                    echo "</tr>";
                } else {
                    $count = 1;
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td>" . $count++ . "</td>";
                        echo "<td>" . $row['fname'] . " " . $row['lname'] . "</td>";
                        echo "<td>" . $row['courseName'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['contact'] . "</td>";
                        if($uid == 1){
                        echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td><a href=\"update_teacher.php?id=" . $row['id'] . "\">update</a></td>";
                        echo "<td><a href=\"delete_teacher.php?id=" . $row['id'] . "\">delete</a></td>";
                        }
                        echo "</tr>";
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

<?php include('footer.php') ?>