<?php include('header.php'); ?>
<?php
include('../includes/dbcon.php');
if ($uid == 2 or $uid == 3) {
    header('location: list_teacher.php');
}
?>

<?php include('../includes/dbcon.php'); ?>
<?php include('sidebar.php') ?>
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
                    <li class="breadcrumb-item"><a href="#">
                            <?php
                            if ($uid == 3) {
                                echo "STUDENT";
                            } else if ($uid == 2) {
                                echo "TEACHER";
                            } else { //if($uid == 3])
                                echo "ADMIN";
                            }
                            ?>
                        </a></li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="text-dark">Student</h1>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-graduate"></i></span>
                <a href="list_student.php">
                    <div class="info-box-content text-dark">
                        <span class="info-box-text">View All Students</span>
                        <span class="info-box-number"><i class="fas fa-eye"></i></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-graduate"></i></span>
                <a href="add_student.php">
                    <div class="info-box-content text-dark">
                        <span class="info-box-text">Add Students</span>
                        <span class="info-box-number"><i class="fas fa-plus"></i></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-graduate"></i></span>
                <a href="user_form.php">
                    <div class="info-box-content text-dark">
                        <span class="info-box-text">Approve Students</span>
                        <span class="info-box-number"><i class="fas fa-check"></i></span>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <?php include('footer.php') ?>