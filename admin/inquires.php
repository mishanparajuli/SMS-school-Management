<?php include('header.php') ?>

<?php include('../includes/dbcon.php') ?>
<?php include('sidebar.php') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="teacher.php">Back</a>
            </div><!-- /.col -->
            <div class="col-sm-4 text-center">
            <h4><strong>WELCOME <?php echo strtoupper($user); ?> </strong></h4>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Inquires</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="text-dark">Inquires</h1>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container pb-5">
    <?php
    $sql = "SELECT * FROM inquires";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        die("failed to execute query!");
    } else {
        if (mysqli_num_rows($res) < 0) {
            echo "<h4 class=\"text-center\">\"No Inquires found\"</h4>";
        } else {
            while ($row = mysqli_fetch_assoc($res)) {
    ?>
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class=" d-flex">
                            <h5 class=" text-dark"><strong><?php echo $row['name'] ?></strong></h5>
                            <h5 class="ml-auto justify-content-end"><?php echo $row['date'] ?></h5>
                        </div>
                        <i class="fas fa-envelope pr-2 text-primary"></i><a class="text-primary"><?php echo $row['email'] ?></a><br>

                        <?php
                        if ($row['phone'] != NULL) {
                            echo "<i class=\"fas fa-phone pr-2 text-primary\"></i><a class=\" text-primary\">" . $row['phone'] . "<a></i><br>";
                        }
                        ?>
                        <p class="p-2"><?php echo $row['message'] ?></p>
                        <button type="button" param="<?php echo $row['id']; ?>" id="dataModal" class="btn btn-sm btn-primary shadow-sm reply">Reply</button>
                        <a href="delete_inquires.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        <hr>

                    </div>

                </div>
    <?php
            }
        }
    }
    ?>
</div>

<div class="modal" id="reply_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <input type="number" name="d ataid" id="dataid">


                <div id="dataid">

                </div>
                <?php



                $query = "SELECT * FROM inquires WHERE id=" . (int)$dataid . "";
                $run = mysqli_query($conn, $query);
                if (!$run) {
                    die('failed');
                }
                $data = mysqli_fetch_assoc($run);

                ?>
                <h3 class="">Reply mail to <?php echo $data['name'] ?></h3>
                <button class="close" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <h2>halo <br>
                    <?php
                    var_dump($dataid);
                    ?>
                </h2>

            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataModal').on('click', function(e) {
            // alert("nagar");
            var rowid = $(this).attr('param');

            $.ajax({
                type: 'post',
                url: 'data.php', //Here you will fetch records 
                data: 'rowid=' + rowid, //Pass $id
                success: function(data) {
                    $('.fetched-data').html(data); //Show fetched data from database
                }
            });
        });
    });
</script>

<?php include('footer.php') ?>