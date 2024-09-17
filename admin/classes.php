<?php include('header.php') ?>
<?php include('../includes/dbcon.php') ?>
<?php include('sidebar.php') ?>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $sections = implode(',', $_POST['section']);
    // echo '<pre>';
    // print_r($sections);
    // echo '</pre>';
    $added_date = date('Y-m-d');
    $query = "INSERT INTO classes (title, section, added_date) VALUES ('$title', '$sections', '$added_date')";
    mysqli_query($conn, $query);
}
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Classes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Classes</a></li>
                    <li class="breadcrumb-item active">Classes</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <?php
        if (isset($_REQUEST['action'])) {
        ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Add new Class
                    </h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control" placeholder="title" required>
                        </div>
                        <div class="form-group">
                            <label for="section">section</label>
                            <?php
                            $query = "SELECT * FROM `sections`";
                            $res = mysqli_query($conn, $query);
                            $count = 1;
                            while ($sections = mysqli_fetch_object($res)) {
                            ?>
                                <div>
                                    <label for="<?= $count ?>">
                                        <input type="checkbox" name="section[]" id="<?= $count ?>" value="<?= $sections->id ?>" class="" placeholder="Enter section">
                                        <?= $sections->title ?>
                                    </label>
                                </div>
                            <?php
                                $count++;
                            } ?>
                        </div>
                        <input name="submit" class="btn btn-success" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Classes
                    </h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-success btn-sm"><i class="fa fa-plus mr-2"></i><strong>Add new</strong> </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Section</th>
                                    <th>Added_date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $count = 1;
                                $query = "SELECT * FROM `classes`";
                                $res = mysqli_query($conn, $query);
                                while ($class = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr>
                                        <td><?php echo $class['title'] ?></td>
                                        <td>
                                            <?php
                                            $sec = explode(',', $class['section']);
                                            foreach ($sec as $section) {
                                                $qry = mysqli_query($conn, "SELECT * FROM `sections` WHERE id = " . "'" . $section . "'");
                                                $section_name = mysqli_fetch_assoc($qry);
                                                echo $section_name['title'] . '<br>';
                                            }

                                            ?>

                                        </td>
                                        <td><?php echo $class['added_date']; ?></td>
                                        <td></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
    <!--/. container-fluid -->
</section>

<?php include('footer.php') ?>