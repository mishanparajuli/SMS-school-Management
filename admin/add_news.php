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
                    <li class="breadcrumb-item active">News</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="m-0 text-dark">News</h1>
        </div><!-- /.row -->
    </div>
</div>

<div class="container pb-5 mb-5">

    <div class="card">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="heading">Title</label>
                    <input type="text" class="form-control" name="subject" required id="heading" placeholder="Title of news">
                </div>
                <div class="form-group">
                    <label for="img">Image</label>
                    <input type="file" name="image_file" id="img" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Content</label>
                    <textarea class="form-control" name="content" id="message" placeholder="Description" rows="3"></textarea>
                </div>
                <button class="btn btn-success" name="add_news" type="submit">Add news</button>
            </form>
        </div>
    </div>

</div>
<?php include('footer.php') ?>

<?php
if(isset($_POST['add_news'])){

    include('../includes/dbcon.php');
    $heading = $_POST['subject'];

    $file = $_FILES['image_file'];
    $file_name = $_FILES['image_file']['name'];
    $file_size = $_FILES['image_file']['size'];
    $tmp_name = $_FILES['image_file']['tmp_name'];
    $error = $_FILES['image_file']['error'];
    if($error === 0){
        if($file_size > 2048000){
            echo "The size of cannot be more than 2 mb";
        }else{
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_actual_ext = strtolower($file_ext);
            $allowed_ext = array('jpg', 'jpeg', 'png');
            if(in_array($file_actual_ext, $allowed_ext)){
                $new_img_name = uniqid("IMG-", true).".".$file_actual_ext;
                $img_upload_path = '../images/news/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);                
            }else{
                echo "You cannot upload files of this extension.";
            }
        }
    }
    else{
        echo "Error occured uploadinig image";
    }

    $content = $_POST['content'];

    
    $sql = "insert into news(heading, content, image) values('$heading', '$content', '$new_img_name')";
    $res = mysqli_query($conn, $sql);
    if(!$res){
        echo "failed to upload news";
    }
    else{
        ?>

    <script type="text/javascript">
        alert("News uploaded successfully");
    </script>

        <?php
    }


}


?>