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


