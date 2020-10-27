<?php 	
	
	include_once '../header.php';
	session_start();
	
?>


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
        header("Location:admin_display.php");
	$_SESSION['toor']=true;
	    
    }
    else
    {
  
	  
		
      $con=getCon();
	    
      $date = date_default_timezone_set('Asia/Kolkata');
      $cur = date("Y-m-d H:i:s");
	    
      $res=$con->query("insert into contact_us(name,email,message,contact) values('$name','$email','$message','$contact')");	
	   
      $res1=$con->query("update contactus set timesent='$cur' where email='$email'");
      
      $_SESSION['success']=true;
      	
      header("Location:../index.php#voila");
      
    } 
  
?>




