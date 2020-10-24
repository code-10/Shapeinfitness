<?php 
	include_once 'header.php';
?>

<!--css and js-->
	<link rel="stylesheet" href="static/card.css">
	<link rel="stylesheet" href="static/main.css">
	<link rel="stylesheet" href="static/gallery.css">
	<script src="static/gallery.js"></script>
<!--css and js end-->

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




<!--contact-->

<div class="container">
	<div class="row mb-5 mt-5">
		<div class="col-md-6">
			<form onsubmit="disableButton()" class="p-3" method="POST" action="#" style="background-color: #a4508b;background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);">
     				<div class="form-group">
        				<label for="inputname">Name</label>
        				<input type="text" class="form-control" id="inputname" placeholder="name" name="name" required>
   	 			</div>
   	 			<div class="form-group">
        				<label for="inputEmail">Email</label>
        				<input type="email" class="form-control" id="inputemail" placeholder="email" name="email" required>
    				</div>
				<div class="form-group">
        				<label for="inputnumber">Phone</label>
        				<input type="Number" class="form-control" id="inputnumber" placeholder="number" name="number" required>
   	 			</div>
				<div class="form-group">
        				<label for="inputname">Message</label>
        				<textarea rows="4" cols="200" type="text" class="form-control" id="inputmessage" placeholder="message" name="message" required></textarea>
   	 			</div>
				<button type="submit" name="check" id="sent" class="btn btn-dark" style="background-color:black;">Send</button>
			</form>
		</div>
		<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15548.576152625568!2d77.5934389!3d13.0264981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafffc1080f8f8457!2sSHAPE%20IN%20-%20Women&#39;s%20Fitness%20Gym%20and%20Group%20classes%20RT%20NAGAR!5e0!3m2!1sen!2sin!4v1603537909194!5m2!1sen!2sin" width="100%" height="507" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</div>

<!--contact end-->


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



