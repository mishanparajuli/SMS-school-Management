<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school management system</title>

    <link rel="stylesheet" href="../css/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/f7e50e2bfa.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>
<?php include('navbar.php') ?>

<?php
include('includes/dbcon.php');
$id = $_GET['id'];
$sql = "select * from news where id = $id";
$res = mysqli_query($conn, $sql);
if(!$res){
  echo "failed to fetch news updates";
}
$row = mysqli_fetch_assoc($res);
$date = date('d F, Y', strtotime($row['date']));
?>

<section>
    <div class="container-fluid pt-5 bg-light">
        <h4 class="pt-3"><i class="fas fa-home"></i> / RECENT UPDATES</h4>
    </div>
</section>


<section class="py-5 mt-5" id="about-us">
  <div class="text-center mb-5">
    <h2><?= $row['heading'] ?></h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 mb-4 pb-2">
        <img src="images/news/<?= $row['image'] ?>" alt="" class="img-fluid">
      </div>
      <div class="col-lg-6 col-12 mb-4">
        <p class="pb-2 text-right"><b>Posted on </b>: <?php echo $date ?></p>
        <div class="">
            <p><?= $row['content'] ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>