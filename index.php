<?php 
	include_once 'header.php';
?>



<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color:#000000;">
  <a class="navbar-brand" href="#">Shapeinfitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Location</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>



<!--<div>
	<img src="assets/main.jpg" class="img-fluid main" alt="Shapeinfitness">
</div>-->


<!--Main-->
<div class="hero-image">
  <div class="hero-text">
    <h1>Shape in Fitness</h1>
    <p>Women's Gym</p>
    <button class="btn draw-border">Learn More</button>
  </div>
</div>
<!--main end-->


<!--services-->
<div id="card" class="m-4">
   <div class="row">
      <div class="col-md-3 mt-4 mb-4">
          <!--<a href="">-->
            <figure style="margin:0.9rem!important">
               <figcaption>
                  <h4> <span>Cardio and Yoga</span></h4>
                  <p>Shape in fitness provides Cardio and Yoga</p>
               </figcaption>
            </figure>
         <!--</a>-->
      </div>
      <div class="col-md-3 mt-4 mb-4">
          <!--<a href="">-->
            <figure style="margin:0.9rem!important">
               <figcaption>
                  <h4> <span>Cardio and Yoga</span></h4>
                  <p>Shape in fitness provides Cardio and Yoga</p>
               </figcaption>
            </figure>
         <!--</a>-->
      </div>
      <div class="col-md-3 mt-4 mb-4">
          <!--<a href="">-->
            <figure style="margin:0.9rem!important">
               <figcaption>
                  <h4> <span>Cardio and Yoga</span></h4>
                  <p>Shape in fitness provides Cardio and Yoga</p>
               </figcaption>
            </figure>
         <!--</a>-->
      </div>
      <div class="col-md-3 mt-4 mb-4">
         <!--<a href="">-->
            <figure style="margin:0.9rem!important">
               <figcaption>
                  <h4> <span>Cardio and Yoga</span></h4>
                  <p>Shape in fitness provides Cardio and Yoga</p>
               </figcaption>
            </figure>
         <!--</a>-->
      </div>
   </div>
</div>
<!--services end-->




<!--Gallery-->

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(105).jpg" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">This is the first title</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(115).jpg" alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Thir is the second title</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(108).jpg" alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">This is the third title</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!--Gallery end-->



<?php include_once 'footer.php'; ?>


<style>
    /*Media Queries*/
	@media (min-width:320px)  {  /* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  {  /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
 	@media (min-width:641px)  {  /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  { .main{object-fit: cover;width: 100%;height: 698px;} /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) { .main{object-fit: cover;width: 100%;height: 698px;} /* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) { .main{object-fit: cover;width: 100%;height: 698px;}/* hi-res laptops and desktops */ }
	
</style>


<!--css and js-->
	<link rel="stylesheet" href="static/card.css">
	<link rel="stylesheet" href="static/main.css">
	<link rel="stylesheet" href="static/gallery.css">
	<script src="static/gallery.js"></script>
<!--css and js end-->


