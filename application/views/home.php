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
    <nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="#">Logo</a> 
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="main-navigation"> 
        <ul class="navbar-nav"> 
          <li class="nav-item"> <a class="nav-link" href="#">Home</a></li> 
          <li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/index.php/register/displaydata">View Joined Member</a></li> 
          <li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/index.php/register/savedata">Add Member</a></li> 
        </ul> 
      </div> 
    </nav>
    <header class="page-header header container-fluid" style="font-family:Apple Chancery, cursive;"> 
      <div class="overlay">
      </div>
      <div class="description">

        <h1 style="font-family:Apple Chancery, cursive; font-size: 80px;">Plan Your Trip <br> Visit To SriLanka</h1> 
          <!--<p>
            Sri Lanka, an island south of India crams an extraordinary variety of places to visit within its modest size. Lapped up by the Indian Ocean, the coastline is lined with idyllic – and often refreshingly undeveloped – beaches, while the mainland boasts a compelling variety of landscapes ranging from wildlife-rich lowland jungles to the misty highlands of the hills, swathed in tea plantations.
          </p>-->
         <!-- <button class="btn btn-outline-secondary btn-lg">Read More</button>-->
      </div>
    </header>
    <div class="container features"> 
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12"> 
          <h3 class="feature-title">Sigiriya</h3>
          <img class="col-12" src="./img/col-1.jpg" class="img-fluid"> 
          <p>Sigiriya or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka. The name refers to a site of historical and archaeological significance that is dominated by a massive column of rock nearly 200 metres high. </p> 
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Rumassala</h3> 
          <img src="./img/col-2.jpg" class="img-fluid"> 
          <p>Rumassala South Beach is situated along with the Rumassala hill in Unawatuna. It is also known as Jungle Beach and is situated in close proximity to the Galle-Matara main road. The beach can be identified easily along with the hills where there is a small temple on its peak and lush greenery in the surrounding forest.</p> 
        </div>

         <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Ella Rock</h3> 
          <img src="./img/col-3.jpg" class="img-fluid"> 
          <p>Ella Rock is one of the must-sees in Ella, a place which is becoming increasingly touristy and even brands itself as a 'tourist town' (check out the signboards at the junction!). Offering panoramic views of the Ella Gap and Little Adam's Peak, the hike is an arduous upward climb and you're guaranteed to lose yourselves among tea estates, hills, and tall shrubs if you're without a guide.</p> 
        </div>
      </div> 
    </div>
    <footer class="page-footer" style="background-color: #222; color: #ccc; padding: 60px 0 30px; "> 
      <div class="container"> 
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Additional Information About Travel Life</h6>
            <p>Find travel ideas for planning your holiday to Sri Lanka. Discover things to see and do, places to stay and more.. This is the official site of Sri Lanka Tourism.. </p> 
            <p> The country's wonderful individuality – evident in its contrasting landscapes and its distinct culture,</p> 
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Contact</h6> 
            <p>35, Travel Agent, Reid Avenue, Colombo 7 <br/>info@mywebsite.com <br/>+ 01 234 567 88 <br/>+ 01 234 567 89</p> 
          </div> 
        </div>
        <div class="footer-copyright text-center" style="color: #666; padding: 40px 0;">
          © 2019 Copyright: MyWebsite.com
        </div>
      </div>  
    </footer>
  </body>
</html>