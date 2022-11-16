<?php
  error_reporting(0);
  session_start();
  session_destroy();


  if($_SESSION['message'])
  {
    $message=$_SESSION['message'];

    echo"<script type='text/javascript'>
   alert('$message');




    </script>";
  }
  $host="localhost";
  $user="root";
  $password="";
  $db="studentproject";


  $data=mysqli_connect($host,$user,$password,$db);

  $sql="SELECT * FROM teacher";

  $result=mysqli_query($data,$sql);




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel ="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>

    <label class ="logo">Chandernagore Govt. College</label>

   <ul>
    <li><a href="">Home</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">Admission</a></li>
    <li><a href="Login.php"  class="btn btn-sucess">Login</a></li>
   </ul>



    </nav>

    <div class ="section1">
        <label class="img_text">Teach Students With Care</label>
        <img  class="main_img" src="libview.jpg">

<div class="container">
<div class="row">
    <div class="col-md-4">

    <img  class ="welcome_img" src="small_IMG_4781.jpg">

    </div>
    <div class="col-md-8">
        <h3>Welcome to  Chandernagore College</h3>
        <p>Chandernagore College established in 1862 and re-established in 1931, is a Constituent College of the University of Burdwan. Chandernagore College is recognized by the University Grants Commission (UGC) under Section 2(f)1956 and Section 12(B) 1972. The distinguished faculty members of this institution hails from the prestigious West Bengal Educational Service Cadre.The College was evaluated by the National Accreditation and Assessment Council (NAAC) in 2007 and was awarded ‘B++’ rank.</p>

            </div>


     </div>
    
     <center>
        <h1>Our Teachers</h1>
     </center>
     <div class="container">


        <div class="row"> 
           <?php
           while($info=$result->fetch_assoc())
           {
           ?>
          
      <div class="col-md-4">
        <img  class="teacher" src="<?php  echo "{$info['image']}"?>">
         <h3><?php  echo "{$info['name']}"?></h3>
         <h5><?php  echo "{$info['description']}"?></h5>
      </div>

      <?php
           }
      ?> 


     </div>
     </div>

         <center>
        <h1>Our Courses</h1>
     </center>

        <div class="container">

        <div class="row">

        <div class="col-md-4">
            <img class="teacher" src="web.jpg">
          <h3>Web Developer</h3>
      </div>
      
       <div class="col-md-4">
    <img class="teacher" src="graphic.jpg">
    <h3>Graphics Design</h3>
     </div>

     <div class="col-md-4">
    <img class="teacher" src ="marketing.png">
    <h3>Marketing</h3>
     </div>

    </div>
     <center>
    <h3 class="adm">Admission Form</h3>
         </center>
<div align ="center" class="admission_form">
    <form  action="data_check.php" method="POST">
        <div class="adm_int">
        <label class ="label_text">Name</label>
        <input class="input_deg"  type ="text" name ="name">
        </div>

        <div class="adm_int">
        <label  class ="label_text">Email</label>
        <input class="input_deg" type ="text" name ="email">
        </div>

        <div class="adm_int">
        <label  class ="label_text">phone</label>
        <input class="input_deg" type ="text" name ="phone">
        </div>

        <div class="adm_int">
        <label  class ="label_text">Message</label>
        <textarea class="input_txt"  name="message"></textarea>
        </div>

        <div class="adm_int">
        <input  class="btn btn-primary" id="submit"  type="submit" value ="apply"  name="apply">
        </div>

    </form>
</div>
   <footer>
       <h3 class ="footer_text">All @copyright reserved Chandernagore Govt. College </h3>
    </footer>



</body>
</html>