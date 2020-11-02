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
        <a class="nav-link" href="../index.php" style="color:black;font-family: 'Roboto', sans-serif;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services" style="color:black;font-family: 'Roboto', sans-serif;">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php#gallery" style="color:black;font-family: 'Roboto', sans-serif;">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php#contactus" style="color:black;font-family: 'Roboto', sans-serif;">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php#location" style="color:black;font-family: 'Roboto', sans-serif;">Location</a>
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
	<form onsubmit="disableButton()" action="refresh.php" method="POST">
		<button type="submit" name="check" id="refresh" class="btn btn-dark m-4" style="background-color:black;padding:0.5em 1em;">Refresh</button>
	</form>
</div>
	
	
	<div class="m-2">
		<?php for($j=0;$j<$c;$j++) {  ?> 
<div class="card border-dark mt-4 mb-4 ml-2 mr-2">
	<div class="card-header">
    		<a class="m-2" href = "tel:+91 <?=$contactdisplay[$j]?>" target="_blank"><span style="color:black;" class="fa fa-phone mr-2"></span></a>
		<a class="m-2" href = "mailto:<?=$emaildisplay[$j]?>?subject = Greetings from Shape in - RT NAGAR" target="_blank"><span style="color:black;" class="fa fa-envelope m-4"></span></a>
		
		<form onsubmit="disableButton()" action="delete_query.php" method="POST">
			<button type="submit" class="fa fa-phone" style="margin-left:100px;" name="deletequery"></button>
		</form>
		
  	</div>
  <div class="card-body">
    <p class="card-text m-2 fonty"><strong>Name : </strong><?=$namedisplay[$j]?></p>
     <p class="card-text m-2 fonty"><strong>contact : </strong><?=$contactdisplay[$j]?></p>
    <p class="card-text m-2 fonty"><strong>Email : </strong><?=$emaildisplay[$j]?></p>
    <p class="card-text m-2 fonty"><strong>Message : </strong><?=$messagedisplay[$j]?></p>
    <p class="card-text m-2 fonty"><small class="text-muted"><?=$timedisplay[$j]?></small></p>
  </div>
</div>
		<? } ?>
	</div>
  
	
	
	
 <!--sending-->
	
<script>
    function disableButton() {
        var btn = document.getElementById('refresh');
        btn.disabled = true;
	btn.style.padding = "0.5em 1em";
        btn.innerText = 'Refreshing....';
    }
</script>
	
	
<!--sending end-->
  

	
	
<? include_once '../footer.php'; ?>
  
  
<style>
    /*Media Queries*/
	@media (min-width:320px)  {  .fonty{font-size:16px;}  /* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  {  .fonty{font-size:16px;} /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
 	@media (min-width:641px)  {  .fonty{font-size:16px;}  /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  {  .fonty{font-size:20px;} /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) {  .fonty{font-size:20px;} /* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) {  .fonty{font-size:20px;} /* hi-res laptops and desktops */ }
	
</style>
  
  
