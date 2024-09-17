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
            <h1 class="m-0 text-dark">Add Students</h1>
        </div><!-- /.row -->
    </div>
</div>
<?php
            if(isset($_GET['error'])){
                $error=$_GET['error'];
              echo  "<span class='text-danger'>  $error already exists";
            }
            ?>
<div class="container pb-5 mb-5">
    <form action="check_student.php" method="POST" onsubmit="return validation()">
    <div class="md-form form-group">
        <input type="text" name="fname" class="form-control" placeholder="First Name" id ="vfname" required>
        <span id="err_fname" class="text-danger font weight-bold"></span>
    </div>
    <div class="md-form form-group">
        <input type="text" name="lname" class="form-control" placeholder="Last Name" id ="vlname" required>
        <span id="err_lname" class="text-danger font weight-bold"></span>
    </div>
    <div class="md-form form-group">
    <select class="form-control" id="vcourse" name="course">
        <option selected hidden disabled>Select Faculty</option>
        <option>Bsc.CSIT</option>
        <option>BCA</option>
        <option>BIM</option>
        <option>BBS</option>
    </select> 
    </div>
    <div class="md-form form-group">
        <input type="text" name="contact" class="form-control" placeholder="Phone No." id ="vcontact" required>
        <span id="err_contact"class="text-danger font weight-bold"></span>
    </div>

    <div class="md-form form-group">
        <input type="text" name="email" class="form-control" placeholder="Email Address" id ="vemail"required>
        <span id="err_email"class="text-danger font weight-bold"></span>
    </div>

    <div class="md-form form-group">
        <input type="text" name="uname" class="form-control" placeholder="Username" required>
    </div>
    <div class="md-form form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>

    <div class="md-form from-group">
        <button type="submit" class="btn btn-primary" name="add_student">Submit</button>
    </div>

    </form>
</div>
</div>
<?php include('footer.php') ?>

<script src="form_validation.js">
    
</script>
