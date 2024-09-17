<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="dashboard.php">Back</a>
            </div><!-- /.col -->
            <div class="col-sm-4 text-center">
                <h3><strong>WELCOME ADMIN</strong></h3>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active"><strong>Notice</strong></li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="m-0 text-dark">Add Notice</h1>
        </div><!-- /.row -->
    </div>
</div>

<div class="container pb-5 mb-5">
    <?php
    include('../includes/dbcon.php');
    $query = "SELECT * FROM notice where to_whom = 'all'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
<div class="card">
    <div class="card-body">
        <h3 class="card-title"><?php echo $row['subject'] ?></h3>
        <p class="card-text"><?php echo $row['message'] ?></p>
    </div>
</div>
            <?
        }
    }
    ?>

</div>
<?php include('footer.php') ?>