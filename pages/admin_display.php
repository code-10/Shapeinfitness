<?php 	
	
	include_once '../header.php';
	session_start();

	$isadmin=$_SESSION['toor'];
	if(!$isadmin)
	{
		$_SESSION['success']=true;
      	
      		header("Location:../index.php#voila");	
	}
	
	
?>


<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php"><img src="../assets/logo.webp" width="80" height="80" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php#gallery">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php#contactus">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php#location">Location</a>
      </li>
    </ul>
  </div>
</nav>


<script>
  
$(function(){ 
     var navMain = $(".navbar-collapse");

     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
 });  
  
</script>





<?php

    function getCon()
    {
      $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
      $server = $url["host"];
      $username = $url["user"];
      $password = $url["pass"];
      $db = substr($url["path"], 1);

      $con = new mysqli($server, $username, $password, $db);

      if($con->connect_error)
        die($con->connect_error);

      return $con;

    }
  


$con=getCon();
        $res=$con->query("select * from contact_us order by contact_id desc;");
        
			$namedisplay=Array();
			$contactdisplay=Array();
        	$emaildisplay=Array();
            $messagedisplay=Array();
	      	$timedisplay=Array();
        
        while($ele = $res->fetch_assoc())
        {
			$namedisplay[]=$ele['name'];
			$contactdisplay[]=$ele['contact'];
            $emaildisplay[]=$ele['email'];
            $messagedisplay[]=$ele['message'];
	    	$timedisplay[]=$ele['timesent'];
        }
        
        $c=count($namedisplay);

?>


<div class='jumbotron text-center'>
        <h1 class="display-4">SHAPE IN QUERIES</h1>
	<a href="refresh.php" id="refresh" class="btn btn-primary active m-4" role="button" aria-pressed="true">Refresh</a>
</div>
	
	
	<div class="m-2">
		<?php for($j=0;$j<$c;$j++) {  ?> 
<div class="card border-dark mt-4 mb-4 ml-2 mr-2">
	<div class="card-header">
    		<a class="m-2" href = "tel:+91 <?=$contactdisplay[$j]?>" target="_blank"><span style="color:black;" class="fa fa-phone mr-2"></span></a>
		<a class="m-2" href = "mailto:<?=$emaildisplay[$j]?>?subject = Greetings from Shape in - RT NAGAR" target="_blank"><span style="color:black;" class="fa fa-envelope m-4"></span></a>
  	</div>
  <div class="card-body">
    <p class="card-text m-2 fonty"><strong>Name : </strong><?=$namedisplay[$j]?></p>
     <p class="card-text m-2"><strong>contact : </strong><?=$contactdisplay[$j]?></p>
    <p class="card-text m-2"><strong>Email : </strong><?=$emaildisplay[$j]?></p>
    <p class="card-text m-2"><strong>Message : </strong><?=$messagedisplay[$j]?></p>
    <p class="card-text m-2"><small class="text-muted"><?=$timedisplay[$j]?></small></p>
  </div>
</div>
		<? } ?>
	</div>
  
	
	
	
 <!--sending-->
	
<script>
    function disableButton() {
        var btn = document.getElementById('refresh');
        btn.disabled = true;
	btn.style.padding = "1em 2em";
        btn.innerText = 'Refreshing....';
    }
</script>
	
	
<!--sending end-->
  

	
	
<? include_once '../footer.php'; ?>
  
  
<style>
    /*Media Queries*/
	@media (min-width:320px)  {    /* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  {    /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
 	@media (min-width:641px)  {    /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  {  .fonty{} /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) {  .fonty{} /* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) {  .fonty{} /* hi-res laptops and desktops */ }
	
</style>
  
  
