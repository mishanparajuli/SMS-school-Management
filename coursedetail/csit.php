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
<?php include('../navbar.php') ?>
<section>
    <div class="container-fluid pt-5 bg-light">
        <h4 class="pt-3"><i class="fas fa-home"></i> / COURSE DETAILS</h4>
    </div>
</section>

<section class="py-5 mt-5" id="about-us">
  <div class="text-center mb-5">
    <h2>CSIT(Computer Science and Information Technology)</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 mb-4 pb-2">
        <img src="../images/demo.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12 mb-4">
        <h4 class="pb-2">About Bsc. CSIT</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corrupti aspernatur dolores sint, ipsum totam commodi velit nisi, animi, perferendis possimus quo doloribus incidunt neque aut asperiores omnis quam quia?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quasi veritatis excepturi distinctio earum laborum nulla accusamus? Officiis possimus quidem dolore </p>
      </div>
    </div>
  </div>
</section>

<section class="py-3">
  <div class="container">
    <h4 class="text-center font-weight-bold mb-5">Syallabus <hr></h4>

    <div class="row">

      <div class="col-12 mb-4">
        <h5 class="text-center">First Semester</h5>
        <table class="table">

          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Full Marks</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSC109</td>
              <td>Introduction to Information Technology</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CSC110</td>
              <td>C Programming</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CSC111</td>
              <td>Digital Logic</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>MTH112</td>
              <td>Mathematics I</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>PHY113</td>
              <td>Physics</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">500</th>
            </tr>
        
          </tbody> 

        </table>
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Second Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Full Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSC160</td>
              <td>Discrete Structure</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CSC161</td>
              <td>Object-Oriented Programming</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CSC162</td>
              <td>Microprocessor</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>MTH163</td>
              <td>Mathematics II</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>STA164</td>
              <td> 	Statistics I</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">500</th>
            </tr>
    
          </tbody>
        </table>
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Third Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Full Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSC206</td>
              <td>Data Structure and Algorithm</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CSC207</td>
              <td>Numerical Method</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CSC208</td>
              <td>Computer Architecture</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CSC209</td>
              <td>Computer Graphics</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>STA210</td>
              <td> 	Statistics II</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">500</th>
            </tr>
    
          </tbody>
        </table>           
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Forth Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Full Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSC257</td>
              <td>Theory of Computation</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CSC258</td>
              <td>Computer Networks</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CSC259</td>
              <td>Operating Systems</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CSC260</td>
              <td>Database Management System</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CSC261</td>
              <td> 	Artificial Intelligence</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">500</th>
            </tr>
          </tbody>
        </table>             
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Fifth Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Full Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSC314</td>
              <td>Design and Analysis of Algorithms</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CSC315</td>
              <td>System Analysis and Design</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CSC316</td>
              <td>Cryptography</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CSC317</td>
              <td>Simulation and Modeling</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CSC318</td>
              <td>Web Technology</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td></td>
              <td>Elective I</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">18</th>
              <th scope="row">600</th>
            </tr>

            <tr>
              <th  colspan="5" scope="col">List of Electives</th>
            </tr>
            <tr>
              <th scope="row">i</th>
              <td conspan="4">Multimedia Computing (CSC319)</td>
            </tr>
            <tr>
              <th scope="row">ii</th>
              <td conspan="4">Wireless Networking (CSC320)</td>
            </tr>
            <tr>
              <th scope="row">iii</th>
              <td conspan="4">Image Processing (CSC321)</td>
            </tr>
            <tr>
              <th scope="row">iv</th>
              <td conspan="4">Knowledge Management (CSC322)</td>
            </tr>
            <tr>
              <th scope="row">v</th>
              <td conspan="4">Society and Ethics in Information Technology (CSC323)</td>
            </tr>
            <tr>
              <th scope="row">vi</th>
              <td conspan="4">Microprocessor Based Design (CSC324)</td>
            </tr>

          </tbody>
        </table> 
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Sixth Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Full Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSC364</td>
              <td>Software Engineering</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CSC365</td>
              <td>Compiler Design and Construction</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CSC366</td>
              <td>E-Governance</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CSC367</td>
              <td>NET Centric Computing</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CSC368</td>
              <td>Technical Writing</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td></td>
              <td>Elective II</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">18</th>
              <th scope="row">600</th>
            </tr>

            <tr>
              <th  colspan="5" scope="col">List of Electives</th>
            </tr>
            <tr>
              <th scope="row">i</th>
              <td conspan="4">Applied Logic (CSC369)</td>
            </tr>
            <tr>
              <th scope="row">ii</th>
              <td conspan="4">E-Commerce (CSC370)</td>
            </tr>
            <tr>
              <th scope="row">iii</th>
              <td conspan="4">Automation and Robotics (CSC371)</td>
            </tr>
            <tr>
              <th scope="row">iv</th>
              <td conspan="4">Neural Networks (CSC372)</td>
            </tr>
            <tr>
              <th scope="row">v</th>
              <td conspan="4">Computer Hardware Design (CSC373)</td>
            </tr>
            <tr>
              <th scope="row">vi</th>
              <td conspan="4">Cognitive Science (CSC3474)</td>
            </tr>

          </tbody>
        </table> 
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Seventh Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Full Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSC409</td>
              <td> 	Advanced Java Programming</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CSC410</td>
              <td>Data Warehousing and Data Mining</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CSC411</td>
              <td>Principles of Management</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CSC412</td>
              <td>Project Work</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td></td>
              <td>Elective III</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">500</th>
            </tr>

            <tr>
              <th  colspan="5" scope="col">List of Electives</th>
            </tr>
            <tr>
              <th scope="row">i</th>
              <td conspan="4">Information Retrieval (CSC413)</td>
            </tr>
            <tr>
              <th scope="row">ii</th>
              <td conspan="4">Database Administrator (CSC414)</td>
            </tr>
            <tr>
              <th scope="row">iii</th>
              <td conspan="4">Software Project Management (CSC415)</td>
            </tr>
            <tr>
              <th scope="row">iv</th>
              <td conspan="4">Network Security (CSC416)</td>
            </tr>
            <tr>
              <th scope="row">v</th>
              <td conspan="4">Digital System Design (CSC417)</td>
            </tr>
            <tr>
              <th scope="row">vi</th>
              <td conspan="4">International Marketing (MGT418))</td>
            </tr>

          </tbody>
        </table> 
      </div>
          
      <div class=" col-12 mb-4">
        <h5 class="text-center">Eight Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Full Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSC461</td>
              <td>Advanced Database</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CSC462</td>
              <td>Internship</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td></td>
              <td>Elective IV</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td></td>
              <td>Elective V</td>
              <td>3</td>
              <td>100</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">500</th>
            </tr>

            <tr>
              <th  colspan="5" scope="col">List of Electives</th>
            </tr>
            <tr>
              <th scope="row">i</th>
              <td conspan="4">Advanced Networking with IPV6 (CSC463)</td>
            </tr>
            <tr>
              <th scope="row">ii</th>
              <td conspan="4">Distributed Networking (CSC464)</td>
            </tr>
            <tr>
              <th scope="row">iii</th>
              <td conspan="4">Game Technology (CSC465)</td>
            </tr>
            <tr>
              <th scope="row">iv</th>
              <td conspan="4">Distributed and Object-Oriented Database (CSC466)</td>
            </tr>
            <tr>
              <th scope="row">v</th>
              <td conspan="4">Introduction to Cloud Computing (CSC467)</td>
            </tr>
            <tr>
              <th scope="row">vi</th>
              <td conspan="4">Geographical Information System (CSC468)</td>
            </tr>
            <tr>
              <th scope="row">vii</th>
              <td conspan="4">Decision Support System and Expert System (CSC469)</td>
            </tr>
            <tr>
              <th scope="row">viii</th>
              <td conspan="4"> 	Mobile Application Development (CSC470)</td>
            </tr>
            <tr>
              <th scope="row">ix</th>
              <td conspan="4"> 	Real-Time Systems (CSC471)</td>
            </tr>
            <tr>
              <th scope="row">x</th>
              <td conspan="4"> 	Network and System Administration (CSC472)</td>
            </tr>
            <tr>
              <th scope="row">xi</th>
              <td conspan="4">Embedded Systems Programming (CSC473)</td>
            </tr>
            <tr>
              <th scope="row">xii</th>
              <td conspan="4">International Business Management (MGT474)</td>
            </tr>
            
          </tbody>
        </table> 
      </div>

    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h4 class="text-center p-3 font-weight-bold">Fee Structure</h4>

  </div>
</section>





<div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2021. All rights reserved.
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