<?php include('header.php') ?>

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
                    <li class="breadcrumb-item active">Notice</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="m-0 text-dark">Notices</h1>
        </div><!-- /.row -->
    </div>
</div>

<div class="container pb-5 mb-5">

    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="sub">Subject</label>
                    <input type="text" class="form-control" name="subject" required id="sub" placeholder="Subject of notice">
                </div>
                <div class="form-group">
                    <label for="for">To whom</label>
                    <select name="to_whom" id="for" class="form-control">
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="all">To all</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="valid">valid-upto</label>
                    <input type="date" class="form-control" name="validUpto" required id="valid" placeholder="Subject of notice">
                </div>
                <div class="form-group">
                    <label for="message">message</label>
                    <textarea class="form-control" name="notice" id="message" rows="3"></textarea>
                </div>
                <button class="btn btn-success" name="add_notice">Add notice</button>
            </form>
        </div>
    </div>

</div>
<?php include('footer.php') ?>

<?php
if(isset($_POST['add_notice'])){

    include('../includes/dbcon.php');
    $subject = $_POST['subject'];
    $to_whom = $_POST['to_whom'];
    $date = $_POST['validUpto'];
    $message = $_POST['notice'];

    $todayDate = date("Y-m-d");
    if($date < $todayDate){
        // echo  "<span class='text-danger'>Sorry date is not valid!";
        ?>
            <script>
                alert('Sorry date is not valid!');
            </script>
    <?php
    }  
    else{
        $sql = "INSERT INTO notice (to_whom, subject, message, validUpto) VALUE('$to_whom','$subject','$message', '$date')";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            die("Insertion failed!");
        } else {
            ?>
    
            <script type="text/javascript">
                alert("Notice added successfully");
            </script>
        
                <?php
        }
    }  

}


?>