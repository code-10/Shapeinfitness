<?php 
	include_once 'header.php';
?>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

<!--css and js-->
	<link rel="stylesheet" href="static/card.css">
	<link rel="stylesheet" href="static/main.css">
	<link rel="stylesheet" href="static/gallery.css">
	<script src="static/gallery.js"></script>
<!--css and js end-->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#000000;">
  <a class="navbar-brand" href="#">
    <img src="assets/logo.png" width="80" height="80" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gallery">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#location">Location</a>
      </li>
    </ul>
  </div>
</nav>



<!--Main-->
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-family: 'Roboto', sans-serif;color:white;font-size:64px;">SHAPE IN</h1>
    <p>Women's Fitness Gym</p>
    <a href="#services"><button class="btn draw-border" style="padding:1em;">Learn More</button></a>
  </div>
</div>
<!--main end-->



<!--motivation-->



<!--<div class="p-4" style="background-color:black;">
	<p style="font-family: 'Roboto', sans-serif;color:white;font-size:36px;" class="text-center p-2">STAY FIT</p>
	<hr style="background-color:white;width:48px;">
	<p style="font-family: 'Roboto', sans-serif;color:white;font-size:36px;" class="text-center p-2">STAY HEALTHY</p>
</div>-->


<!--motivation end-->





<!--facilities-->

<p id="services" style="font-family: 'Roboto', sans-serif;color:black;font-size:40px;" class="text-center mt-5 mb-2">OUR FACILITIES</p>

<?php  
	$services=Array("Fitness","Weight Loss","Tonning Class","Zumba","Yoga","Pilates");
	$serviceinfo=Array("Fitness","Weight Loss","Tonning Class","Zumba","Yoga","Pilates");
	$content=Array("",
		       "",
		       "",
		       "Zumba is a dance based workout. The styles of dance include hip hop, samba, mambo, 
		       salsa and more. If you love to swing your hips and groove to the beat – Zumba is a must try.
		       The choreographed dance moves will help get your heart pumping and increase your endurance.",
		       "A simple yoga practice can increase your levels of concentration, alleviate symptoms of anxiety,
		       help you sleep better at time, and over time, regain mobility, flexibility and range of motion.
		       Shape in yoga classes are designed for all levels of abilities and experience union of body, mind and spirit.",
		       "Pilates with strength training and high-energy music that will keep your heart pumping throughout.
		       Expect an intense fast-paced, total body workout that will not only sculpt and tone long lean muscles,
		       but will improve endurance, stamina, balance, alignment and of course core strength.");
?>

<div class="container">
	<? $c=0; for($i=0;$i<2;$i++) { ?>
	<div class="row">
		<? for($j=0;$j<3;$j++) { ?>
		<div class="col-md-4 mt-4 mb-4">
			<figure class="snip1529">
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample13.jpg" alt="pr-sample13" />
				<!--<div class="date"><span class="day">28</span><span class="month">Apr</span></div>-->
				<figcaption>
					<h3 class="text-center"><?=$services[$c]?></h3>
					<p><?=$serviceinfo[$c]?></p>
				</figcaption>
				<div class="hover">
					<p style="font-family: 'Roboto', sans-serif;color:black;font-size:22px;" class="p-4"><?=$content[$c]?><p>
				</div>
				<!--<a href="#"></a>-->
			</figure>
		</div>
		<? $c++; } ?>
	</div>
	<? } ?>
</div>

<!--facilities end-->



<!--motivation-->



<div class="p-4" style="background-color:black;">
	<p style="font-family: 'Roboto', sans-serif;color:white;font-size:36px;" class="text-center p-1">SOMETIMES IT TAKES THE WORST PAIN TO BRING ABOUT THE BEST CHANGE.</p>
</div>


<!--motivation end-->




<!--Gallery-->


<p id="gallery" style="font-family: 'Roboto', sans-serif;color:black;font-size:40px;" class="text-center mt-5 mb-2">GALLERY</p>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 main" src="assets/main.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 main" src="assets/main.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 main" src="assets/main.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 main" src="assets/main.jpg" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Gallery end-->




<!--contact-->

<div class="m-4">
	<div class="row mb-5 mt-5">
		<div class="col-md-6 mt-4 mb-4" id="contactus">
			<p id="contactus" style="font-family: 'Roboto', sans-serif;color:black;font-size:40px;" class="text-center mt-5 mb-2">CONTACT US</p>
			<form onsubmit="disableButton()" class="p-3" method="POST" action="#" style="background-color: #fbb034;background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);">
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
		<div class="col-md-6 mt-4 mb-4" id="location">
			<p id="location" style="font-family: 'Roboto', sans-serif;color:black;font-size:40px;" class="text-center mt-5 mb-2">LOCATION</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15548.576152625568!2d77.5934389!3d13.0264981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafffc1080f8f8457!2sSHAPE%20IN%20-%20Women&#39;s%20Fitness%20Gym%20and%20Group%20classes%20RT%20NAGAR!5e0!3m2!1sen!2sin!4v1603537909194!5m2!1sen!2sin" width="100%" height="507" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</div>

<!--contact end-->


<script>
	
$(function(){ 
     var navMain = $(".navbar-collapse");

     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
 });	
	
</script>

<?php include_once 'footer.php'; ?>


<style>
    /*Media Queries*/
	@media (min-width:320px)  {  .mars{ margin:10px; } /* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  {  .mars{ margin:10px; } /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
 	@media (min-width:641px)  {  .mars{ margin:10px; } /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  { .main{object-fit: cover;width: 100%;height: 698px;} /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) { .main{object-fit: cover;width: 100%;height: 698px;} /* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) { .main{object-fit: cover;width: 100%;height: 698px;}/* hi-res laptops and desktops */ }
	
</style>






