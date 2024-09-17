<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="student.php">Back</a>
            </div><!-- /.col -->
            <div class="col-sm-4 text-center">
                <h3><strong>WELCOME ADMIN</strong></h3>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="m-0 text-dark">Update Student</h1>
        </div><!-- /.row -->
    </div>
</div>

<div class="container pb-5 mb-5">
    <?php
    include('../includes/dbcon.php');
    $id = $_GET['id'];
    $sql = "select * from student where id=$id";
    $res = mysqli_query($conn, $sql);
    if(!$res){
        die("failed to fetch data");
    }
    else{
        $row = mysqli_fetch_assoc($res);
        $course = $row['courseName'];
    ?>

    <form  method="POST" action="check_update_student.php?id=<?php echo $id ?>" onsubmit="return validation()">
    <?php
                if(isset($_GET['error'])){
                    $error=$_GET['error'];
                echo  "<span class='text-danger'>  $error already exists </span>" ;
                }
                ?>
        <div class="md-form form-group">
            <input type="text" name="fname" class="form-control" placeholder="First Name" id ="vfname" required value="<?= $row['fname'];?>">
            <span id="err_fname" class="text-danger font weight-bold"></span>
        </div>
        <div class="md-form form-group">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" id ="vlname" required value="<?= $row['lname'];?>">
            <span id="err_lname" class="text-danger font weight-bold"></span>
        </div>
        <div class="md-form form-group">
        <select class="form-control" id="courseTitle" name="course" value="<?= $row['courseName'];?>">
            <option value="Bsc.CSIT" <?= ($course == 'Bsc.CSIT')? "selected" : "" ?> >Bsc.CSIT</option>
            <option value="BCA" <?= ($course == 'BCA')? "selected" : "" ?> >BCA</option>
            <option value="BIM" <?= ($course == 'BIM')? "selected" : "" ?> >BIM</option>
            <option value="BBS" <?= ($course == 'BBS')? "selected" : "" ?> >BBS</option>
            <!-- <option selected hidden disabled>Select Faculty</option> -->
        </select> 
        </div>
        <div class="md-form form-group">
            <input type="text" name="contact" class="form-control" placeholder="Phone No." id ="vcontact" required value="<?= $row['contact'];?>">
            <span id="err_contact"class="text-danger font weight-bold"></span>
        </div>
        
        <div class="md-form form-group">
            <input type="text" name="email" class="form-control" placeholder="Email Address" id ="vemail" required value="<?= $row['email'];?>">
            <span id="err_email"class="text-danger font weight-bold"></span>
        </div>
        
        <div class="md-form form-group">
            <input type="text" name="uname" class="form-control" placeholder="Username" required value="<?= $row['user_name'];?>">
        </div>
        <div class="md-form form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required value="<?= $row['password'];?>">
        </div>
        
        <div class="md-form from-group">
            <button type="submit" class="btn btn-primary" name="update_student">Submit</button>
        </div>
        
    </form>
                    
    <?php } ?>
</div>

<?php include('footer.php'); ?>



<script src="form_validation.js"></script>contact

