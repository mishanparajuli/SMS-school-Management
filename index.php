<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>school management system</title>

  <link rel="stylesheet" href="css/style.css">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/f7e50e2bfa.js" crossorigin="anonymous"></script>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- swaped event -->
  <link rel="stylesheet" href="js/swiped-events.min.js">

  <style>
    .heroSection{
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/s1.avif");
      height: 100vh;
      width: auto;
      background-position: center;
      /* background-repeat: no-repeat; */
      background-size: cover;
    }
    .heroSection .hero_content{ 
      padding-top: 50px;
    }

    /* Recent update > card > date */
    .icon-calendar{
      align-items: center;
      background: #fff;
      border-top: .6rem solid blue;
      display: flex;
      flex-direction: column;
      min-height: 4rem;
      min-width: 4rem;
      text-align: center;
    }
    .icon-calendar_number{
      font-size: 24px;
      font-weight: 600;
      line-height: 1;
    }
    .icon-calendar_number
    .icon-calendar_month{
      font-size: 16px;
      font-weight: 400;
    }

  </style>

</head>

<body>
 
<?php include('navbar.php') ?>

<!-- hero section -->

<section>
  <div class="heroSection container-fluid py-auto">
      <div class="container my-auto">

        <div class="row py-auto mx-auto mt-5">
          <div class="hero_content col-md-6 col-lg-6 col-12 text-light">
            <h3><b>School Managenent System</b></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias animi nulla provident facere ullam ipsam sed nostrum</p>
            <a href=""><button type="button" class="btn btn-primary shadow"><i class="fas fa-phone"></i> Call Now</button></a>
          </div>
          <div class="hero_content col-md-6 col-lg-6 col-12">
      
            <div class="card mx-auto text-center pt-3 shadow-lg">
              <h4 class="text-dark">Inquiry Form</h4>
              <form action="insert_query.php?id=1" method="POST"  onsubmit="return validation()">
                <div class="form-group">
                  <div class="card-body">
                    <div class="mb-4">
                      <input type="text" name="name" placeholder="Your name" required class="form-control" id="fname">
                    </div>
                    <span id="a"class="text-danger font weight-bold"></span>
                    <div class="mb-4">
                      <input type="email" name="email" placeholder="Your email" class="form-control" id="email">
                      <span id="b"class="text-danger font weight-bold"></span>
                    </div>
                    <div class="mb-4">
                      <input type="number" name="phone" placeholder="Your mobile" class="form-control"id="contact">
                      <span id="c"class="text-danger font weight-bold"></span>
                    </div>
                    <div class="mb-4">
                      <textarea class="form-control" name="message" placeholder="Your query" name="message" id="" cols="30" rows="2"></textarea>
                    </div>
                    <input class="btn btn-primary shadow px-5" name="submit" type="submit" value="Submit">
                  </div>
                </div>
      
              </form>
            <script>
   function validation(){

var first_name =document.getElementById("fname").value;
var correct =/^[A-Za-z]+$/;
if(first_name.length <3){
  document.getElementById("a").innerHTML ="***name should be more then 2 "
  return false;
}
if(first_name.match(correct)){
  true;
}
else{
  document.getElementById("a").innerHTML ="***name should be  charcter only"
  return false;
}


var vemail=document.getElementById("email").value;
if(vemail.indexOf("@")<=0){
  document.getElementById("b").innerHTML ="***position of @ in not valid "
  return false;
}
if((vemail.charAt(vemail.length-4)!=".")&&(vemail.charAt(vemail.length-3)!=".")){
  document.getElementById("b").innerHTML ="***position of . in not valid "
  return false;
}

var phone =document.getElementById("contact").value;

 if(phone.length !=10){
  document.getElementById("c").innerHTML ="**number should be 10 "
  return false;
}
if(isNaN(phone)){
  document.getElementById("c").innerHTML ="***only number  are allowed"
  return false;
}


          }
            </script>
            </div>
      
          </div>
        </div>

      </div>
  </div>
</section>
<!-- </div> -->



<!-- </div>  -->


  <!-- popup modal for notice -->

<?php
  include("includes/dbcon.php");
  $todayDate = date("Y-m-d");
  $sql = "select * from notice where validUpto >= '$todayDate' and to_whom = 'all'";

  $res = mysqli_query($conn, $sql);
  if(!$res){
    echo "unable to fetch notice";
  }
  else{
    while($row = mysqli_fetch_assoc($res)){
      ?>
      <!-- Modal -->
      <div class="modal fade" id="popupNotice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>NOTICE:<?php echo " ". $row['subject']; ?></i></b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo $row['message']; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>
      
      <?php
    }  
  }  
  ?>  
  <script type="text/javascript">
    setTimeout(function(){
      $('#popupNotice').modal('show');
    }, 900);
  </script>
    <!-- end popup modal -->


  <!-- our courses -->
  <section class="py-5 bg-light" id="courses">
    <div class="text-center mb-5">
      <h2>Our Courses</h2>
    </div>

    <div class="container">

      <div class="row text-center">
        <div class="col-lg-3 col-md-6 col-12">
          <div class="card mb-5 shadow">
            <div>
              <img src="images/course-1.png" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <p class="card-text">
                Bsc. CSIT
              </p>
              <hr>
              <a href="courseDetails/csit.php"><button class="btn btn-primary text-light">View More</button></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card mb-5 shadow">
            <div>
              <img src="images/course-2.png" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <p class="card-text">
                BCA
              </p>
              <hr>
              <a href="courseDetails/bca.php"><button class="btn btn-primary text-light">View More</button></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card mb-5 shadow">
            <div>
              <img src="images/course-3.png" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <p class="card-text">
                BIM
              </p>
              <hr>
              <a href="courseDetails/bim.php"><button class="btn btn-primary text-light">View More</button></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card mb-5 shadow">
            <div>
              <img src="images/course-4.png" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <p class="card-text">
                BBS
              </p>
              <hr>
              <a href="courseDetails/bbs.php"><button class="btn btn-primary text-light">View More</button></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- About us -->
  <section class="py-5" id="about-us">
    <div class="text-center mb-5">
      <h2>About Us</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/pmc.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h4 class="pb-2">Meow meow college of IT</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corrupti aspernatur dolores sint, ipsum totam commodi velit nisi, animi, perferendis possimus quo doloribus incidunt neque aut asperiores omnis quam quia?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quasi veritatis excepturi distinctio earum laborum nulla accusamus? Officiis possimus quidem dolore exercitationem delectus perferendis deserunt in, hic provident eos. Saepe nulla voluptates autem nam ratione vel eius tempore odit ab dicta, voluptate reprehenderit doloremque hic voluptatem minima obcaecati ad libero?</p>
        </div>
      </div>
    </div>
  </section>



  

  <!-- Recent Updates -->

  <?php
    include('includes/dbcon.php');
    $sql = "select * from news order by id desc";
    $res = mysqli_query($conn, $sql);
    if(!$res){
      echo "failed to fetch news updates";
    }
  ?>

  <section class="py-5 bg-light" id="updates">
    <div class="text-center mb-5">
      <h2>Recent Updates</h2>
      <div class="container">
        <div class="row p-2">
          
          <?php 
          if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
              $img = $row['image'];
              $newsDate =  date("d", strtotime($row['date']));
              $newsMonth = date("M", strtotime($row['date']));
              $content = $row['content'];
          ?>
              <div class="col-lg-4 col-md-6 col-12">
                <!-- Card -->
                <div class="card my-3 shadow">
                  <span class="icon-calendar shadow" style="pointer-event: none; position: absolute; top:0; z-index: 1; padding: 10px 15px">
                    <span class="icon-calendar_number"><?= $newsDate  ?></span>
                    <span class="icon-calendar_month"><?= $newsMonth ?></span>
                  </span>
                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="images/news/<?= $row['image'] ?>"
                      alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title"><?php echo $row['heading'] ?></h4>
                    <!-- Text -->
                    <p class="card-text"><?php

                    if(strlen($content) > 90){
                      $sub_str = substr($content, 0, 90)."..."; 
                      echo $sub_str;
                    }
                    else{
                      echo $content;
                    }
                    ?></p>
                    <!-- Button -->
                    <a href="news.php?id=<?= $row['id'] ?>" class="btn btn-primary">Read More</a>
                  </div>
                </div>
                <!-- Card -->
              </div>
          <?php
            }
          }else{
            echo "No result found";
          }
            ?>
             
        </div>
      </div>
    </div>
  </section>


  <!-- Gallery -->
  <!-- <section class="py-5" id="gallery">
    <div class="text-center mb-5">
      <h2>Gallery</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
        <div class="col-lg-3 col-6 mb-5">
          <img src="images/gal.jpg" alt="" class="img-fluid">
          <h5 class="text-center pt-2">Some text</h5>
        </div>
      </div>
    </div>
  </section> -->

  <!-- footer section -->
  <footer class=" text-dark py-3" id="contact-us">
    <div class="text-center py-4">
      <h2><strong>Thanks for Visiting</strong> </h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <h3 class="text-center pb-2">Get in Touch</h3>
          <!-- <hr> -->

          <div class="address text-center">
            <i class="fas fa-map-marker-alt px-2 pb-2"></i>Patandhoka Lalitpur(next to pimbhal)<br>
            <i class="fas fa-phone px-2 pb-2"></i>(+977 )9841300727 9806100220 <br>
            <i class="fas fa-envelope px-2 pb-2"></i>meowmeoew@hotmail.com, primary@meowcollegeofit.edu.np<br>
            <i class="fas fa-globe px-2 pb-2"></i>http://meowmeoew.edu.np/<br>
          </div>
          <!-- <div class="sm-link text-center">
            <a href=""><i class="fab fa-facebook-square pr-1"></i></a>
            <a href=""><i class="fab fa-twitter pr-1"></i></i></a>
            <a href=""><i class="fab fa-github pr-1"></i></a>
            <a href=""><i class="fab fa-linkedin pr-1"></i></a>
          </div> -->

        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="mailing text-center">
            <h3 class="text-center pb-2">Leave a message</h3>
            <!-- <hr> -->
            <form action="insert_query.php?id=2" method="POST" onsubmit="return validation()" >
              <input type="text" name="name" placeholder="Name" size="30" required id="abc"><br><br>
              <span id="x"class="text-danger font weight-bold"></span>
              <input type="email" name="email" placeholder="Email" size="30" required id="abcd"><br><br>
              <span id="c"class="text-danger font weight-bold"></span>
              <textarea name="message" id="" cols="30" rows="3" placeholder="Message" required></textarea><br>
              <input type="submit" value="Submit" class='btn btn-primary px-3 py-1 my-2'>
            <script>
           
//            if(last_name.match(correct)){
//   true;
// }
// else{
//   document.getElementById("b").innerHTML ="***name should be  charcter only"
//   return false;
// }
//             
</form>
          </div>
        </div>

      </div>
    </div>
  </footer>



  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2024. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>

</body>



</html>
