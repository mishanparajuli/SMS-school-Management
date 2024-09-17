<?php include('header.php') ?>

<?php
include('../includes/dbcon.php');
$id = $_SESSION['id'];
if($uid == 2){
    $sql = "select * from teacher where id=$id";
    $user = "Teacher";
    
}
else if($uid == 3){
    $sql = "select * from student where id=$id";
    $user = "Student";
    
}
else{
    $sql = "select * from admin where id=$id";
    $user = "Admin";

}

$res = mysqli_query($conn, $sql);
if(!$res){
    echo "$uid";
    echo "$id";
    die("query failed");
}
else{
    $row = mysqli_fetch_assoc($res);
    $fname = $row['fname'];
    $fullName = $fname." ".$row['lname'];
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
                <h3><strong>WELCOME
                        <?php echo strtoupper($fname); ?>
                    </strong></h3>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><?php echo $fname ?></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
            <hr>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
    <div class="container">


    </div>
</section>

<section id="endpage">
<div class="container my-5 py-5">

    <div class="row gutters-sm">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="../images/user.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4><?php echo "$fullName" ?></h4>
                            <p class="text-secondary mb-1"><?php echo $user; ?></p>
                            <p class="text-muted font-size-sm">Username: <?php  echo $row['user_name']; ?></p>
                            <?php if($uid != 1){ ?>
                                <p class="text-muted font-size-sm">Email: <?php  echo $row['email']; ?></p>
                                <p class="text-muted font-size-sm">Course: <?php  echo $row['courseName']; ?></p>
                                <p class="text-muted font-size-sm">Contact: <?php  echo $row['contact']; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>
</section>



<?php include('footer.php'); ?>