
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="../logout.php" class="nav-link" title="Logout"> <i class="fa fa-sign-out-alt mr-1"></i>Logout</a>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="user.php" class="brand-link">
        <img src="../images/user.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">My Profile</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- manage Students -->
                
                <li class="nav-item ">
                    <a href="student.php" class="nav-link">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>Student</p>
                    </a>
                </li>

                <!-- manage teachers -->
                <li class="nav-item">
                    <a href="teacher.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Teacher</p>
                    </a>
                </li>

                <?php
                
                if($uid == 1){
                ?>
<!-- new inquires -->
<li class="nav-item">
    <a href="inquires.php" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>Inquires</p>
    </a>
</li>

<!-- user requests -->
<li class="nav-item">
    <a href="user_form.php" class="nav-link">
        <i class="nav-icon fas fa-user-plus"></i>
        <p>User Requests</p>
    </a>
</li>

<!-- add notice-->
<li class="nav-item">
    <a href="add_news.php" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>Add News</p>
    </a>
</li>
<!-- add notice-->
<li class="nav-item">
    <a href="add_notice.php" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>Add Notice</p>
    </a>
</li>
                <?php }?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">