<?php

session_start();
$uid = $_SESSION['uid'];
if (!isset($_SESSION['uid'])) {
    header('location: ../login.php');
}

include('../includes/dbcon.php');
$uid = $_SESSION['uid'];
$id = $_SESSION['id'];
if($uid == 2){
    $sql = "select * from teacher where id=$id";
}
else if($uid == 3){
    $sql = "select * from student where id=$id";
    
}
else{
    $sql = "select * from admin where id=$id";
}

$res = mysqli_query($conn, $sql);
if(!$res){
    echo "$uid";
    echo "$id";
    die("query failed");
}
else{
    $row = mysqli_fetch_assoc($res);
    $user = $row['fname'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f7e50e2bfa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- evo-calendar -->
    <link rel="stylesheet" href="./calendar/evo-calendar.min.css">
    <link rel="stylesheet" href="./calendar/evo-calendar.midnight-blue.min.css">
    <link rel="stylesheet" href="./calendar/evo-calendar.royal-navy.min.css">
    <link rel="stylesheet" href="./calendar/evo-calendar.orange-coral.min.css">

    <!-- adminlte libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.4/css/adminlte.min.css" integrity="sha512-GVn1gRv3XatzIX7UxIwD8psq158h0Ru+8HEaQLFMA15A1JCU4gO8j64i6e1uZwHo0loxiXLisUXbwlbIyZq68A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css" integrity="sha512-Ho1L8FTfzcVPAlvfkL1BV/Lmy1JDUVAP82/LkhmKbRX5PnQ7CNDHAUp2GZe7ybBpovS+ssJDf+SlBOswrpFr8g==" crossorigin="anonymous" />

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">