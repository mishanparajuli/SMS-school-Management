<?php include('header.php') ?>


<?php
include('../includes/dbcon.php');


$studentCount = mysqli_query($conn, "select count(*) from student");
$teacherCount = mysqli_query($conn, "select count(*) from teacher");
$inquiryCount = mysqli_query($conn, "select count(*) from inquires");
$approveRequests = mysqli_query($conn, "select count(*) from user_form where check_approval<0");


$totalStudent = mysqli_fetch_array($studentCount);
$totalTeacher = mysqli_fetch_array($teacherCount);
$totalInquiry = mysqli_fetch_array($inquiryCount);
$totalRequest = mysqli_fetch_array($approveRequests);


?>

<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="../index.php">Back</a>
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
            <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
    <div class="container">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

                    <a href="student.php">

                        <div class="info-box-content text-dark">
                            <span class="info-box-text">Total Students</span>
                            <span class="info-box-number"><?php echo "$totalStudent[0]" ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                    <a href="teacher.php">
                        <div class="info-box-content text-dark">
                            <span class="info-box-text">Total Teachers</span>
                            <span class="info-box-number"><?php echo "$totalTeacher[0]" ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
                    
            <?php if($uid == 1){ ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-search"></i></span>

                    <a href="inquires.php">
                        <div class="info-box-content text-dark">
                            <span class="info-box-text">New Inquires</span>
                            <span class="info-box-number"><?php echo "$totalInquiry[0]" ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check"></i></span>

                    <a href="user_form.php">
                        <div class="info-box-content text-dark">
                            <span class="info-box-text">Apporve Requests</span>
                            <span class="info-box-number"><?php echo "$totalRequest[0]" ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                </div>
                <!-- /.info-box -->
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

    </div>
    <!--/. container-fluid -->
</section>

<!-- notices -->
<section class="mx-lg-5 mx-md-5 mx-sm-2 my-5 ">
<div id="notice" class=" pb-5">
    <div class="container">
        <hr><h4 class="text-center"><strong>Notices</strong></h4><hr>
    </div>
    <!-- <div class="container"> -->
    <?php
        include('../includes/dbcon.php');
        $query = "SELECT * FROM notice where to_whom = 'all'";
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <div class="container">
    <div class="card my-2 shadow bg-white">
        <div class="card-body text-dark">
            <h4 class="my-2 text-primary"><?php echo strtoupper($row['subject']) ?></h4>
            <h5 class="card-text"><?php echo $row['message'] ?></h5>
        </div>
    </div>
    </div>
            <?php
        }
    }
    else{
        ?>
        <h2>No Notices to show</h2>
        <?php
    }
    ?>
    <!-- </div> -->
</div> 
</section>

<!-- calendar -->
<section class="mx-lg-5 mx-md-5 mx-sm-2 my-5">

    <div id="calendar"></div>


    <script>
        $(document).ready(function() {
            $('#calendar').evoCalendar({
                // theme: 'Midnight Blue',
                // theme: 'Default',
                theme: 'Royal Navy',
                // theme: 'Orange Coral',

                calendarEvents: [{
                        id: 'bHay68s', // Event's ID (required)
                        name: "New Year", // Event name (required)
                        date: "January/1/2024", // Event date (required)
                        description: "happy new year",
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        name: "Vacation Leave",
                        badge: "02/13 - 02/15", // Event badge (optional)
                        date: ["February/13/2024", "February/15/2024"], // Date range
                        description: "Vacation leave for 3 days.", // Event description (optional)
                        type: "event",
                        color: "#63d867" // Event custom color (optional)
                    }
                ]


            })
        })
    </script>
</section>



<section id="endpage">
<div class="my-5 py-5"></div>
</section>
<?php include('footer.php') ?>