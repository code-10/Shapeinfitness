<?php
  include_once 'header.php';
?>


<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color:#f5f5f5;">
  <a class="navbar-brand" href="#" style="color:black;">Shapeinfitness</a>
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



<div>
	<img src="assets/main.jpg" class="img-fluid main" alt="Shapeinfitness">
</div>



<style>
    /*Media Queries*/
	@media (min-width:320px)  {  /* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  {  /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
 	@media (min-width:641px)  {  /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  { .main{object-fit: cover;width: 100%;height: 600px;} /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) {  .main{object-fit: cover;width: 100%;height: 600px;} /* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) {   .main{object-fit: cover;width: 100%;height: 600px;}/* hi-res laptops and desktops */ }
	
</style>
