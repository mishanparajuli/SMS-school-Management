<?php include('header.php') ?>

<?php include('../includes/dbcon.php') ?>
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
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">User Requests</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="m-0 text-dark">User Requests</h1>
        </div><!-- /.row -->
    </div>
</div>
<div class="container pb-5">

    <?php
    $new = "SELECT * FROM user_form where check_approval = -1";
    $approved = "SELECT * FROM user_form where check_approval = 1";
    $rejected = "SELECT * FROM user_form where check_approval = 0";

    ?>

    <ul class="nav nav-tabs border-0">
        <li class="nav-item"><a class="nav-link active border-warning border-bottom-0" href="#new" data-toggle="tab">New Requests</a></li>
        <li class="nav-item"><a class="nav-link border-success border-bottom-0" href="#approved" data-toggle="tab">Approved</a></li>
        <li class="nav-item"><a class="nav-link border-danger border-bottom-0" href="#rejected" data-toggle="tab">Rejected</a></li>
    </ul>
    <div class="tab-content shadow mb-5">
        <!-- new request -->
        <div class="tab-pane bg-light active fade show border border-warning" id="new">
            <?php
            $query = mysqli_query($conn, $new);
            if (mysqli_num_rows($query) < 1) { ?>
                <div class="card-body text-center">
                    <h5>No new request submitted!</h5>
                </div>
                <?php } else {

                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="card-body">
                    <h5><strong><?php echo strtoupper($row['user_type']); ?></strong></h5>
                        <h5 class="text-dark">
                            Name : <?php echo $row['fname'], " ", $row['lname'], "<br>" ?>
                            Contact : <?php echo $row['phone'], "<br>" ?>
                            Faculty : <?php echo $row['courseName'], "<br>" ?>
                            Submission Date : <?php echo $row['post_date'], "<br>" ?>
                        </h5>
                        <?php if ($row['check_approval'] == -1) { ?>
                            <a href="delete_user_form.php?id=<?php echo $row['id'] ?>" class=" btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete ?');">Reject</a>
                            <a href="approve_user_form.php?id=<?php echo $row['id'] ?>" class="btn-sm btn-success" onclick="return confirm('Are you sure you want to approve ?');">Approve</a>
                        <?php } ?>
                        <hr>
                    </div>

            <?php
                }
            }
            ?>

        </div>
        <!-- approved -->
        <div class="tab-pane bg-light fade show border border-success" id="approved">
            <?php
            $query = mysqli_query($conn, $approved);
            if (mysqli_num_rows($query) < 1) { ?>
                <div class="card-body text-center">
                    <h5>No requests approved !</h5>
                </div>
                <?php } else {

                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="card-body">
                        <h5><strong><?php echo strtoupper($row['user_type']);  ?></strong></h5>
                        <h5 class="text-dark">
                            Name : <?php echo $row['fname'], " ", $row['lname'], "<br>" ?>
                            Contact : <?php echo $row['phone'], "<br>" ?>
                            Faculty : <?php echo $row['courseName'], "<br>" ?>
                            Submission Date : <?php echo $row['post_date'], "<br>" ?>
                        </h5>
                        <?php if ($row['check_approval'] == 1) { ?>
                            <h6 class="bg-success text-light px-5 py-1">User request approved.</h6>
                        <?php } ?>
                        <hr>
                    </div>

            <?php
                }
            }
            ?>
        </div>
        <!-- rejected  -->
        <div class="tab-pane bg-light fade show border border-danger" id="rejected">
            <?php
            $query = mysqli_query($conn, $rejected);
            if (mysqli_num_rows($query) < 1) { ?>
                <div class="card-body text-center">
                    <h5>No request rejected!</h5>
                </div>
                <?php } else {

                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="card-body">
                    <h5><strong><?php echo strtoupper($row['user_type']);  ?></strong></h5>                        
                        <h5 class="text-dark">
                            Name : <?php echo $row['fname'], " ", $row['lname'], "<br>" ?>
                            Contact : <?php echo $row['phone'], "<br>" ?>
                            Faculty : <?php echo $row['courseName'], "<br>" ?>
                            Submission Date : <?php echo $row['post_date'], "<br>" ?>
                        </h5>
                        <?php if ($row['check_approval'] == 0) { ?>
                            <h6 class="bg-danger text-light px-5 py-1">User request rejected.</h6>
                        <?php } ?>
                        <hr>
                    </div>

            <?php
                }
            }
            ?>
        </div>
    </div>

</div>
<?php include('footer.php') ?>