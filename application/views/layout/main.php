<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Data</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url()?>assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
  <!--logo at tab -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/favicon.ico" />
  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    .quicklinks a{
        color:#f1f1f1;
    }
    .quicklinks a:hover{
        color:white;
    }
    .view {
    background: url("https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX30316138.jpg")no-repeat center center;
    background-size: cover;
}


.navbar {
    background-color: transparent;
}

.top-nav-collapse {
    background-color: #2887C1;
}
.about {
      font-size: 4vh;
    }
@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #2887C1;
    }
    .about {
      font-size: 2vh;
    }
}

html,
body,
.view {
  height: 100%;
  font-family: 'Raleway', sans-serif;
}
.view2 {
  height: 50%;
  font-family: 'Raleway', sans-serif;
}
p {
    display:flex;
    justify-content: center;
}

    .wow {
  visibility: hidden;
}
</style>
<script>
$('body').scrollspy({ target: '#navbar-example2' })
</script>
</head>

<body>
    <!-- Header -->
    <header <?php if($ViewContent==="home") { echo 'style="height:100%; "';} else { echo 'style="height:50%; "'; } ?> >

    <nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" >
    <a class="navbar-brand" href="<?php echo base_url();?>"><strong>DATA ANALYTICS</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item pr-3">
          <a class="nav-link active" href="<?php echo base_url();?>index.php/Home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="<?php echo base_url();?>index.php/Home/#about">About</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="<?php echo base_url();?>index.php/Home/#mission">Mission</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="<?php echo base_url();?>index.php/Home/#objectives">Objectives</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="<?php echo base_url();?>index.php/Home/#activities">Club Activities</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/Team">Organising Body</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/Gallery">Gallery</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/Testimonials">Testimonials</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="#">Best ??</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="#">News & Events</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/Contact">Contact Us</a>
        </li>
        
        
      </ul>
    </div>
  </nav>

  
  <div class="view intro-2" >
    <div class="full-bg-img">
      <div class="mask rgba-black-strong flex-center">
        <div class="container text-center white-text animated wow fadeInUp align-items-center justify-content-center" >
          
        <?php
        if(isset($header))
          {
            if ($ViewContent ==="home" ) {
              # code...?>
              <img src="<?php echo base_url() ?>/assets/images/dataLogo.JPG" class="img-fluid mx-auto rounded-circle z-depth-1-half " style="width:15vw;"
              alt="Not available">
            <?php }
            
              echo "<h1 class=' responsive'style='font-size:6vw;' ><strong style='font-family: 'Merriweather', sans-serif;'>  $header </strong></h1>" ;
              if ($ViewContent ==="home" ) {
                # code...?>
                <h1 class=' responsive'style='font-size:3vw;' > Create.Visualize.Analyze </h1>
              <?php }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
        
    </header>
    <!-- /Header -->
  <!-- Start your project here-->
  <?php
    if(isset($ViewContent))
    {
        $this->load->view($ViewContent);
    }
    else
    {
        $this->load->view('pagenotfound');
    }
  ?>
  <!-- /Start your project here-->














  <!-- Footer -->
    
  <footer class="site-footer bg-dark" >
    <div class="container ">
        <div class="row justify-content-center align-items-center  pd-5 pt-5">

        </div>
      <div class="row justify-content-center align-items-center  pb-5 pt-5">
        <!-- col 1 -->
        <div class="col-md-4 mb-5 text-light">
          <h3 class="mb-4 pt-2 ">About Data Analytics Club</h3>
          <p class="mb-5"> The Data Analytics Club is a student-run Activity that provides resources for students interested in the
         field of data analytics.</p>
          <ul class="list-unstyled d-flex">
            <li><a href="#" class="p-2"><i class="fab fa-twitter fa-fw blue-text"></i></a></li>
            <li><a href="#" class="p-2"><i class="fab fa-facebook-f fa-fw blue-text"></i></a></li>
            <li><a href="#" class="p-2"><i class="fab fa-linkedin fa-fw blue-text"></i></a></li>
            
          </ul>

        </div>
        <!-- col 2 -->
        <div class="col-md-5 mb-5 pl-md-5 text-light">
          <div class="mb-5 pb-1">
            <h3 class="mb-4">Contact </h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block pb-2">
                <span class="d-block ">Lead:  Jyothi B </span>
                <span class="text-white "></span>
              </li>
              <li class="d-block pb-2">
                <span class="d-block"><i class="fas fa-phone pr-3"></i>9290449469</span><span class="text-white"></span>
              </li>
              <li class="d-block pb-2">
                <span class="d-block"><i class="fas fa-envelope pr-3"></i>   bjyothicse@cvsr.ac.in</span><span class="text-white"><a href="mailto:" > </a></span>
              </li>
            </ul>
          </div>

          
        </div>
        <!-- col 3 -->
        <div class="col-md-3 mb-5 text-light">
          <h3 class="mb-4 mt-3">Quick Links</h3>
          <ul class="list-unstyled text-light quicklinks">
            <li><a href="<?php echo base_url();?>index.php/Team" class="nav-link " >Organising Body</a></li>
            <li><a href="<?php echo base_url();?>index.php/Testimonials" class="nav-link">Testimonials</a></li>
            <li><a href="<?php echo base_url();?>index.php/Gallery" class="nav-link">Gallery</a></li>
            <li><a href="<?php echo base_url();?>index.php/Contact" class="nav-link">Contact</a></li>
          </ul>
        </div>
        
        <!-- col 4 -->
        <div class="col-md-3">

        </div>

      </div>
      <div class="row justify-content-center align-items-center  pd-5 pt-5 justify-content-center text-center ">
              <p class="grey-text" style="font-size:50%">Site developed by - <a href="#" target="blank" class="blue-grey-text">MassCoders</a></p>
        </div>
    </div>
    
  </footer>
    <!-- /Footer -->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/mdb.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  new WOW().init();
  </script>
</body>

</html>
