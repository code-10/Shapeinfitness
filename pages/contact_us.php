<?php 	
	
	include '../header.php';
	session_start();
	
?>

<?php include_once '../header.php'; ?>

<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color:#000000;">
  <a class="navbar-brand" href="../index.php">Shapeinfitness</a>
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
  
	$name=$_POST['name']; 
	$email=$_POST['email']; 
	$contact=$_POST['contact']; 
	$message=$_POST['message'];
	
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
  

    if($email=="sunilkumarj1996@gmail.com"&&$message=="61356135a"&&$name="sunil")
    {
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
</div>
	
	
	<div class="m-2">
		<?php for($j=0;$j<$c;$j++) {  ?> 
<div class="card mt-4 mb-4 ml-2 mr-2">
  <div class="card-body">
    <p class="card-text m-2"><strong>Name : </strong><?=$namedisplay[$j]?></p>
     <p class="card-text m-2"><strong>contact : </strong><?=$contactdisplay[$j]?></p>
    <p class="card-text m-2"><strong>Email : </strong><?=$emaildisplay[$j]?></p>
    <p class="card-text m-2"><strong>Message : </strong><?=$messagedisplay[$j]?></p>
    <p class="card-text m-2"><small class="text-muted"><?=$timedisplay[$j]?></small></p>
  </div>
</div>
		<? } ?>
	</div>
	


   <!--<div class='m-2'>
       <table class='table '>
           <thead class='thead-dark'>
                <tr>
                    <th class="text-center">SL NO</th>
                    <th class="text-center">NAME</th>
                    <th class="text-center">EMAIL</th>
		    		<th class="text-center">CONTACT</th>
					<th class="text-center">MESSAGE</th>
					<th class="text-center">TIME</th>
                </tr>
           </thead>
	   		<?php for($j=0;$j<$c;$j++) {  ?>    
	   		<tr>
               	<td class="text-center"><?=$j+1?></td>
				<td class="text-center"><?=$namedisplay[$j]?></td>
               	<td class="text-center"><?=$emaildisplay[$j]?></td>
				<td class="text-center"><?=$contactdisplay[$j]?></td>
               	<td class="text-center"><?=$messagedisplay[$j]?></td>
		        <td class="text-center"><?=$timedisplay[$j]?></td>	
           	</tr>
	   <? } ?>
       </table>
   </div>-->

</body>


<?php include_once '../footer.php'; ?>
          
   <? }
    else
    {
  
	  
		
      $con=getCon();
	    
      date_default_timezone_set('Asia/Kolkata');
      $cur = date("Y-m-d H:i:s");
	    
      $res=$con->query("insert into contact_us(name,email,message,contact) values('$name','$email','$message','$contact')");	
	   
      $res1=$con->query("update contactus set timesent='$cur' where email='$email'");
      
      $_SESSION['success']=true;
      	
      header("Location:../index.php#voila");
      
    } 
  
?>




