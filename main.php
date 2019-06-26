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
#organisingBody .card-img-top{
      padding-top:2vh;
      height:auto;
      width:50%;
    }
    #organisingBody .card {
      
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    #organisingBody .card-title{
      font-size: 18px;
    }
    #organisingBody .card-subtitle{
      font-size: 14px;
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
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="#mission">Mission</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="#objectives">Objectives</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="#activities">Club Activities</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link" href="#organisingBody">Organising Body</a>
        </li>
        
        
      </ul>
    </div>
  </nav>

  
  <div class="view intro-2" >
    <div class="full-bg-img">
      <div class="mask rgba-black-strong flex-center">
        <div class="container text-center white-text animated wow fadeInUp align-items-center justify-content-center" >
          
        <img src="<?php echo base_url() ?>/assets/images/dataLogo.JPG" class="img-fluid mx-auto rounded-circle z-depth-1-half " style="width:15vw;"
        alt="Not available">
        <h1 class='responsive' style='font-size:5vw;'><strong > Data Analytics Club </strong></h1>
          
        </div>
      </div>
    </div>
  </div>
        
    </header>
    <!-- /Header -->
  <!-- Start your project here-->
   
 <div class="main" data-spy="scroll" data-target="#navbar-example2" class="scrollspy-example z-depth-1 mt-4" data-offset="0">

 
<div class="container" >

<!--Section: Main info-->
<section class="mt-5 wow fadeIn" id="about">

  <!--Grid row justify-content-center align-items-center -->
  <div class="row justify-content-center align-items-center  justify-content-center align-items-center" >

    <!--Grid column-->
    <div class="col-md-6 mb-4 mx-auto ">

      <img src="<?php echo base_url() ?>/assets/images/" class="img-fluid z-depth-1-half"
        alt="Not available">

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6 mb-4">

      <!-- Main heading -->
      <h3 class="h1-responsive font-weight-bold text-center mb-5 animated wow fadeInUp ">WHO WE ARE</h3>
      
      <div class="divider pt-3 pb-1 "></div>
      <p class=" text-center w-responsive mx-auto mb-5 wow fadeInUp">The Data Analytics Club is a student-run Activity that provides resources for students interested in the
         field of data analytics. Students will have access to leaders from the industry who are discovering insights,
          delivering business value, creating innovations using data, and much more. Students will also have the opportunity 
          to network with professionals to develop long-lasting relationships that they can benefit from in the future.
           Students will also learn the latest data analytics tools, concepts, and trends and impacts into various domains 
           such as business, healthcare, and engineering applications.</p>
     
      
    </div>
    <!--Grid column-->

  </div>
  <!--Grid row justify-content-center align-items-center -->

<!--Section: Main info-->
      </div>  

       <!--Section: about-->
       <section id="mission" class="py-5" >
    
    <!-- Container -->
    <div class="container" >
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center mb-5 wow fadeInUp">MISSION STATEMENT</h2>
        <!-- Section description -->
        <p class=" text-center w-responsive mx-auto mb-5 wow fadeInUp">The Data Analytics Club’s (DAC) mission is to focus on career development and equip students
with the right skills and tools that will enable them to develop/apply relevant analytics-driven solutions.
In pursuit of this goal, we will provide hands-on experience in business analytics through, learning,
events, program simulations, and guest lectures.</p>

      

    </div>
    <!-- Container -->

</section>
<!--Section: about-->

  <!--Section: Objectives-->
  <section id="objectives" class="py-5" >
    
    <!-- Container -->
    <div class="container" >
        <!-- Section heading -->
       
        <!-- Section description -->
       
        <div class="row justify-content-center align-items-center  justify-content-center align-items-center" >



<!--Grid column-->
<div class="col-md-6 mb-4">

  <!-- Main heading -->
  <h3 class="h1-responsive font-weight-bold text-center mb-5 wow fadeInUp">OBJECTIVES</h3>
  
  <div class="divider pt-3 pb-1"></div>
  <p class=" text-center w-responsive mx-auto mb-5 wow fadeInUp">To teach students the basics of technical skills, such as R, Python, Qlik view, Tableau, to better
prepare students for analytics in the business environment.</p>
 
  
</div>
<!--Grid column-->
<div class="col-md-6 mb-4 mx-auto ">

  <img src="<?php echo base_url() ?>/assets/images/" class="img-fluid z-depth-1-half"
    alt="Not available">

</div>
<!--Grid column-->

      

    </div>
    <!-- Container -->

</section>
<!--Section: objectives-->

 <!--Section: Activities-->
 <section id="activities" class="py-5" >
    
    <!-- Container -->
    <div class="container" >
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center mb-5 wow fadeInUp">CLUB ACTIVITIES</h2>
        <!-- Section description -->
        <p class=" text-center w-responsive mx-auto mb-5 "></p>
      <ul class="list-unstyled">
        <li><p class=" text-center w-responsive mx-auto mb-5 wow fadeInUp"><i class="fas fa-map-pin pr-3"></i> Technical trainings (R, SAS, Tableau, Machine Learning)</p></li>
        <li><p class=" text-center w-responsive mx-auto mb-5 wow fadeInUp"><i class="fas fa-map-pin pr-3"></i> On campus corporate information sessions</p></li>
        <li><p class=" text-center w-responsive mx-auto mb-5 wow fadeInUp"><i class="fas fa-map-pin pr-3"></i> Certification in Qlik Sense Business Analyst</p></li>
      </ul>

      

    </div>
    <!-- Container -->

</section>
<!--Section: Activities-->

      <!-- Organising Body -->

      <div class="container pt-5 pb-5" id="organisingBody">
        
<div class="container">
  <center>
  <h2 class="h1-responsive font-weight-bold text-center mb-5 wow fadeInUp">FACULTY LEAD</h2>
    <div class="row justify-content-center align-items-center ">
      <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
       <div class="card">
        <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Program_chair">
        <div class="card-body">
          <h4 class="card-title" style="color: black;">Mrs.B.Jyothi</h4>
          <h6 class="card-subtitle mb-2 text-body">Asst. Prof. Cse Department</h6>
        </div>
      </div>
    </div>


  </div>
  
</div>
   
    <h2 class="h1-responsive font-weight-bold text-center mb-5 pt-5 wow fadeInUp">ORGANISING BODY</h2>
    
    <div class="container">
      <div class="row justify-content-center align-items-center ">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
          <div class="card ">
            <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Chairman">
            <div class="card-body">
              <h4 class="card-title" style="color: black;">Mr.J Shashidhar Reddy  </h4>
              <h6 class="card-subtitle mb-2 text-body">President,III B.Tech</h6>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
          <div class="card ">
            <img class="card-img-top img-thumbnail "  src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Secretary">
            <div class="card-body">
              <h4 class="card-title" style="color: black;">Mr.Aditya</h4>
              <h6 class="card-subtitle mb-2 text-body">Vice President,III B.Tech </h6>
            </div>
          </div>
        </div>


      </div>
    </div>
    <!--end of cheif patron-->
    <hr>
    <!--patron and gen chair-->
    <div class="container">
      <div class="row justify-content-center align-items-center ">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
         <div class="card">
          <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Director">
          <div class="card-body">
            <h4 class="card-title" style="color: black;">Mrs.Keerthi kalla  III B.Tech</h4>
            <h6 class="card-subtitle mb-2 text-body">Secretary,III B.Tech</h6>
          </div>
        </div>
      </div>


    </div>
  </div>

  <!--end of patron and gen chair-->
  <hr>
  <!--Program chair and convenor-->


  <div class="container">
    <div class="row justify-content-center align-items-center ">
      <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
       <div class="card">
        <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Program_chair">
        <div class="card-body">
          <h4 class="card-title" style="color: black;">Mrs.C.Anusha</h4>
          <h6 class="card-subtitle mb-2 text-body">Event Hospitality,III Btech</h6>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
     <div class="card">
      <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Program_chair">
      <div class="card-body">
        <h4 class="card-title" style="color: black;">Mr. Srikar</h4>
        <h6 class="card-subtitle mb-2 text-body">Event Hospitality,III Btech</h6>
      </div>
    </div>
  </div>

  
</div>
</div>

<hr>
<!--End of Program chair and convenor -->
<div class="container">
  <center>
    
    <h2 class="h1-responsive font-weight-bold text-center mb-5 pt-5 wow fadeInUp">INDUSTRY ASSOCIATION</h2>
    <div class="row justify-content-center align-items-center ">
      <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
       <div class="card">
        <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Program_chair">
        <div class="card-body">
          <h4 class="card-title" style="color: black;">Mrs.C.Anusha</h4>
          <h6 class="card-subtitle mb-2 text-body">Event Hospitality,III Btech</h6>
        </div>
      </div>
    </div>


  </div>
</div>
<!--steering committee-->


<hr>

<div class="container">
  <center>
    
    <h2 class="h1-responsive font-weight-bold text-center mb-5 pt-5 wow fadeInUp">INDUSTRY EXPERT</h2>
    <div class="row justify-content-center align-items-center ">
      <div class="col-sm-12 col-md-6 col-lg-4 mb-2 hvr-shadow-radial" >
       <div class="card">
        <img class="card-img-top img-thumbnail "   src="<?php echo base_url('assets/images/pp.jpg');?>" alt="Program_chair">
        <div class="card-body">
          <h4 class="card-title" style="color: black;">Mr.Pankaj Muthe</h4>
          <h6 class="card-subtitle mb-2 text-body">APAC at Qlik</h6>
        </div>
      </div>
    </div>




  </div>
</div>


<!--end of steering committee-->
<hr>

</div>

      <!-- /Organising Body -->
 
  
<div class="container">


</div>  

<div class="container " id="Contact">
<hr class="pt-5">
</div>



  
  </div>
  <!-- /Start your project here-->































  <!-- Footer -->
    
  <footer class="site-footer bg-dark" >
    <div class="container ">
        <div class="row justify-content-center align-items-center  pd-5 pt-5">

        </div>
      <div class="row justify-content-center align-items-center  pb-5 pt-5">
        <!-- col 1 -->
        <div class="col-md-4 mb-5 text-light">
          <h3 class="mb-4 ">About Data Analytics Club</h3>
          <p class="mb-5"> </p>
          <ul class="list-unstyled d-flex">
            <li><a href="#" class="p-2"><i class="fab fa-twitter fa-fw blue-text"></i></a></li>
            <li><a href="#" class="p-2"><i class="fab fa-facebook-f fa-fw blue-text"></i></a></li>
            <li><a href="#" class="p-2"><i class="fab fa-linkedin fa-fw blue-text"></i></a></li>
            
          </ul>

        </div>
        <!-- col 2 -->
        <div class="col-md-5 mb-5 pl-md-5 text-light">
          <div class="mb-5">
            <h3 class="mb-4 ">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block pb-2">
                <span class="d-block ">Address:</span>
                <span class="text-white "></span>
              </li>
              <li class="d-block pb-2">
                <span class="d-block">Telephone:</span><span class="text-white"></span>
              </li>
              <li class="d-block pb-2">
                <span class="d-block">Email:</span><span class="text-white"><a href="mailto:" > </a></span>
              </li>
            </ul>
          </div>

          
        </div>
        <!-- col 3 -->
        <div class="col-md-3 mb-5 text-light">
          <h3 class="mb-4">Quick Links</h3>
          <ul class="list-unstyled text-light quicklinks">
            <li><a href="<?php echo base_url();?>index.php/" class="nav-link " ></a></li>
            <li><a href="<?php echo base_url();?>index.php/" class="nav-link"></a></li>
            <li><a href="<?php echo base_url();?>index.php/" class="nav-link"></a></li>
            <li><a href="<?php echo base_url();?>index.php/" class="nav-link"></a></li>
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
