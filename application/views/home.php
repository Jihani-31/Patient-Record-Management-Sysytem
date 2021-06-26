<!DOCTYPE html>
<html>
  <head>
    <title>Travel Life</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
    <script src=<?php  echo base_url('js/jquery-3.5.1.js'); ?>></script>
    <script src=<?php echo base_url('js/main.js'); ?> ></script>
    <script src=<?php echo base_url('js/bootstrap.js'); ?>></script>
   

  </head>
  <body>
    <nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="#">Ward No 10</a> 
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="main-navigation"> 
        <ul class="navbar-nav"> 
          <li class="nav-item"> <a class="nav-link" href="#">Home</a></li> 
          <li class="nav-item"> <a class="nav-link" href="http://localhost/Patient-Record-Management-Sysytem/index.php/register/displaydata">Patients Record</a></li> 
          <li class="nav-item"> <a class="nav-link" href="http://localhost/Patient-Record-Management-Sysytem/index.php/register/savedata">Add Patient</a></li> 
        </ul> 
      </div> 
    </nav>
    <header class="page-header header container-fluid" style="font-family:Apple Chancery, cursive;"> 
      <div class="overlay">
      </div>
      <div class="description">

        <h1 style="font-family:Apple Chancery, cursive; font-size: 80px;">Patient Record Management<br></h1> 
          <p style="font-family:Apple Chancery, cursive; font-size: 30px;">
           -place For All Your Patients Information
          </p>
         <!-- <button class="btn btn-outline-secondary btn-lg">Read More</button>-->
      </div>
    </header>
    <div class="container features" style="margin-left: 110px;"> 
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12"> 
          <h3 class="feature-title">Kidney Stone</h3>
          <img class="col-12" src="./img/col-1.jpg" class="img-fluid"> 
          <p>Kidneys make one of the most essential organs of the human body. Their constant healthy functioning is required to ensure the body's smooth mechanism.There can be more than one symptom for kidney stones, which include,Excessive pain in the abdomen, lower back or urinary tract. The pain can vary from excruciating, sharp or mild depending on the severity.Persistent urge to urinate, or even blood in urine.Feeling nauseated or severe vomitingConstant sweating or chills </p> 
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Covid-19</h3> 
          <img src="./img/col-2.jpg" class="img-fluid"  height="100px"> 
          <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.</p> 
        </div>

         <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Heart Attack</h3> 
          <img src="./img/col-3.jpg" class="img-fluid"> 
          <p>A heart attack (myocardial infarction or MI) is a serious medical emergency in which the supply of blood to the heart is suddenly blocked, usually by a blood clot. A heart attack is a medical emergency. Call 999 and ask for an ambulance if you suspect a heart attack.</p> 
        </div>
      </div> 
    </div>
    <footer class="page-footer" style="background-color: #222; color: #ccc; padding: 60px 0 30px; "> 
      <div class="container"> 
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Additional Information About Patient Record</h6>
            <p>Find travel ideas for planning your holiday to Sri Lanka. Discover things to see and do, places to stay and more.. This is the official site of Sri Lanka Tourism.. </p> 
            <p> The country's wonderful individuality – evident in its contrasting landscapes and its distinct culture,</p> 
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Contact</h6> 
            <p>General Hospital,Colombo 13 <br/>info@mywebsite.com <br/>+ 01 134 567 88 <br/>+ 01 134 567 89</p> 
          </div> 
        </div>
        <div class="footer-copyright text-center" style="color: #666; padding: 40px 0;">
          © 2019 Copyright: MyWebsite.com
        </div>
      </div>  
    </footer>
  </body>
</html>