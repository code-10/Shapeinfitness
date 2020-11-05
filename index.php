<?php 
	include 'header.php';
	session_start();
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


<!--css and js-->
	<link rel="stylesheet" href="static/main.css">
	<script src="static/gallery.js"></script>
<!--css and js end-->


	    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="assets/logo.webp" width="80" height="80" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
	      <a style="color:black;" class="nav-link" href="#"><strong>Home</strong></a>
      </li>
      <li class="nav-item">
        <a style="color:black;" class="nav-link" href="#gallery"><strong>Gallery</strong></a>
      </li>
      <li class="nav-item">
        <a style="color:black;" class="nav-link" href="#testimonial"><strong>Testimonials</strong></a>
      </li>
      <li class="nav-item">
        <a style="color:black;" class="nav-link" href="#contactus"><strong>Contact Us</strong></a>
      </li>
      <li class="nav-item">
        <a style="color:black;" class="nav-link" href="#location"><strong>Location</strong></a>
      </li>
      <li class="nav-item">
        <a style="color:black;" class="nav-link" href="#aboutus"><strong>About Us</strong></a>
      </li>
    </ul>
  </div>
</nav>



<!--Main-->

<!--<div class="hero-image">
  <div class="hero-text">
    <h1 class="animate__animated animate__fadeIn" style="color:white;font-size:64px;animation-duration: 2s;">SHAPE IN</h1>
    <p>Women's Fitness Gym</p>
    <a href="#learnmore"><button class="btn draw-border" style="padding:1em;">Learn More</button></a>
  </div>
</div>-->


<img src="assets/gallery/gallery_9.webp" class="img-fluid size" alt="SHAPE IN">


<!--main end-->






<div class="p-4" style="background-color:black; id="services">
	<p style="color:white;font-size:40px;" class="text-center">SHAPE IN RT NAGAR</p>
</div>







<!--our facility-->



<div class="p-4" style="background-color:black; id="services">
	<p style="color:white;font-size:40px;margin-bottom:0rem;" class="text-center">OUR</p>
	<p style="color:white;font-size:48px;" class="text-center"><strong>FACILITIES</strong></p>
	
</div>


<!--our facility end-->




<!--facilities-->

<?php  
	$services=Array("Fitness","Weight Loss","Tonning","Zumba","Yoga","Pilates");
	$serviceinfo=Array("Fitness","Weight Loss","Tonning","Zumba","Yoga","Pilates");
	$content=Array("Fitness increases life expectancy, reduces your risk of diseases,
			improve the quality of health. SHAPE IN provides extensive fitness training to
			keep your body and mind balanced.",
		       "Weight is a vital factor of any Women's body, SHAPE IN provides a weight loss program with a 
		       step by step guide to effectively losing weight both by exercise and diet.",
		       "Toning your muscles reduces fat and body weight. A toned body provides more strength, energy, 
		       and flexibility, and can decrease the risk of developing certain diseases such as diabetes and heart disease.
		       SHAPE IN Toning program includes a complete roadmap for a toned body.",
		       "Zumba is a dance-based workout. If you love to swing your hips and groove to the beat – Zumba is a must-try. 
		       SHAPE IN provides Zumba classes that allow you to stay fit by having a great time.",
		       "A simple yoga practice can increase your levels of concentration, alleviate symptoms of anxiety. 
		       SHAPE IN yoga classes is designed for a serene path to Yoga.",
		       "SHAPE IN provides a Pilates program for strength training. Expect an intense fast-paced, total 
		       body workout that will not only sculpt and tone long lean muscles but will improve endurance, stamina,
		       balance, alignment, and of course core strength.");
?>

<p id="learnmore"></p>
<!--<p id="services" style="color:black;font-size:40px;" class="text-center mt-5 mb-2">OUR FACILITIES</p>-->

<div class="container">
	<? $c=0; for($i=0;$i<2;$i++) { ?>
	<div class="row">
		<? for($j=0;$j<3;$j++) { ?>
		<div class="col-md-4 mt-4 mb-4">
			<div class="card">
  				<img class="card-img-top size" src="assets/<?=$services[$c]?>.webp" alt="Shape in fitness">
  				<div class="card-body">
					<h5 class="card-title text-center animate__slideInLeft"><?=$services[$c]?></h5>
    					<p class="card-text text-center animate__slideInLeft"><?=$content[$c]?></p>
  				</div>
			</div>
		</div>
		<? $c++; } ?>
	</div>
	<? } ?>
</div>

<!--facilities end-->





<!--motivation-->



<div class="p-4" style="background-color:black;">
	<p style="color:white;font-size:36px;" class="text-center p-1">STRIVE FOR PROGRESS.</p>
</div>


<!--motivation end-->




<!--Gallery-->


<p id="gallery" style="color:black;font-size:40px;" class="text-center mt-5 mb-2">GALLERY</p>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid size" src="assets/gallery/gallery_1.webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_2.webp" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_3.webp" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_4.webp" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_5.webp" alt="fifth slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_6.webp" alt="sixth slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_7.webp" alt="seventh slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_8.webp" alt="eight slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_9.webp" alt="ninth slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_10.webp" alt="tenth slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid size" src="assets/gallery/gallery_11.webp" alt="eleven slide">
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


<!--testimonial-->

<p id="testimonial"></p>
<p id="services" style="color:black;font-size:40px;" class="text-center mt-5 mb-2">TESTIMONIALS</p>

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/test.webp" class="test" alt="...">
      <div class="carousel-caption bot">
        <h4>Roopashree</h4>
        <p>SHAPE IN is an impressive fitness and training centre.
	A well-equipped gym for an amazing workout for women,the instructors are extremely knowledgeable and awesome people to be around.</p>
	
	<!--start-->
	
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	      
	 <style>
		 .checked{
			color:yellow;	 
		 }
	 </style>
	<!--stars end-->
	      
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/test.webp" class="test" alt="...">
      <div class="carousel-caption bot">
        <h4>Anita</h4>
        <p>SHAPE IN is an exceptional place for women to Workout.It's one of the best women fitness centre in Bengaluru among the ones I attended,
		They provide many services like cardio, yoga and lots more.</p>
	      
	<!--start-->
	
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	      
	 <style>
		 .checked{
			color:yellow;	 
		 }
	 </style>
	<!--stars end-->
	   
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/test.webp" class="test" alt="...">
      <div class="carousel-caption bot">
        <h4>Kriti</h4>
        <p>The environment in SHAPE IN provides you Motivation for a better workout. 
		The ambience and Traning is exceptional. I would highly recommend SHAPE IN.</p>
	 
	<!--start-->
	
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	      
	 <style>
		 .checked{
			color:yellow;	 
		 }
	 </style>
	<!--stars end-->
	   
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--testimonial end-->







<!--contact-->


<div class="m-4">
	<div class="row mb-5">
		<div class="col-md-6 mt-4 mb-4" id="contactus">
			<p id="contactus" style="font-family: 'Roboto', sans-serif;color:black;font-size:40px;" class="text-center mt-4 mb-2">CONTACT US</p>
			<form onsubmit="disableButton()" class="p-3" method="POST" action="pages/contact_us.php" style="background-color: #f71735;background-image: linear-gradient(147deg, #f71735 0%, #db3445 74%);">
     				<div class="form-group">
        				<label for="inputname" style="color:black;">Name</label>
        				<input type="text" class="form-control" id="inputname" placeholder="name" name="name" required>
   	 			</div>
   	 			<div class="form-group">
        				<label for="inputEmail" style="color:black;">Email</label>
        				<input type="email" class="form-control" id="inputemail" placeholder="email" name="email" required>
    				</div>
				<div class="form-group">
        				<label for="inputnumber" style="color:black;">Phone</label>
        				<input type="Number" class="form-control" id="inputnumber" placeholder="number" name="contact" required>
   	 			</div>
				<div class="form-group">
        				<label for="inputname" style="color:black;">Message</label>
        				<textarea rows="4" cols="200" type="text" class="form-control" id="inputmessage" placeholder="message" name="message" required></textarea>
   	 			</div>
				<button type="submit" name="check" id="sent" class="btn btn-dark" style="background-color:black;">Send</button>
			</form>
		</div>
		<div class="col-md-6 mt-4 mb-4" id="location">
			<p id="location" style="font-family: 'Roboto', sans-serif;color:black;font-size:40px;" class="text-center mt-4 mb-2">LOCATION</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15548.576152625568!2d77.5934389!3d13.0264981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafffc1080f8f8457!2sSHAPE%20IN%20-%20Women&#39;s%20Fitness%20Gym%20and%20Group%20classes%20RT%20NAGAR!5e0!3m2!1sen!2sin!4v1603537909194!5m2!1sen!2sin" width="100%" height="507" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</div>




<!--verification-->

<?php

	$success=$_SESSION['success'];
	if($success==1)
	{
		echo '<div class="mt-4 mr-4 ml-4"><div class="alert alert-success text-center">
  			<strong>Message sent successfully</strong></div></div>';
		$_SESSION['success']="";
	}

?>


<!--veification end-->

<div class="m-2" id="voila">
</div>

<!--contact end-->







<!--Scripts-->
<script>
	document.querySelectorAll('a[href^="#learnmore"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>

<script>
    function disableButton() {
        var btn = document.getElementById('sent');
        btn.disabled = true;
	btn.style.padding = "1em 2em";
        btn.innerText = 'Sending....';
    }
</script>

<script>
	
$(function(){ 
     var navMain = $(".navbar-collapse");

     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
 });	
	
</script>

<!--scripts end-->




<div id="aboutus">

<?php include_once 'footer.php'; ?>

</div>

		 
		 
<style>
    /*Media Queries*/
	@media (min-width:320px)  {  .mars{ margin:10px; }  .test{ object-fit: cover;width: 100%;height: 300px; } /* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  {  .mars{ margin:10px; }   .test{ object-fit: cover;width: 100%;height: 300px; } /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
 	@media (min-width:641px)  {  .mars{ margin:10px; }  .test{ object-fit: cover;width: 100%;height: 300px; } /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  { .main{object-fit: cover;width: 100%;height: 698px;}  .bot{ bottom:80px; } .size{ object-fit: cover;width: 100%;height: 640px; } .test{ object-fit: cover;width: 100%;height: 300px; } /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) { .main{object-fit: cover;width: 100%;height: 698px;}  .bot{ bottom:80px; } .size{ object-fit: cover;width: 100%;height: 640px; }  .test{ object-fit: cover;width: 100%;height: 300px; }/* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) { .main{object-fit: cover;width: 100%;height: 698px;}  .bot{ bottom:80px; } .size{ object-fit: cover;width: 100%;height: 640px; }  .test{ object-fit: cover;width: 100%;height: 300px; }/* hi-res laptops and desktops */ }
	
</style>






