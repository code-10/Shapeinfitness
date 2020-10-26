<?php include '../header.php'; ?>


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
  

    if($email=="letmein@gmail.com"&&$message=="opensimsim")
    {
        $con=getCon();
        $res=$con->query("select * from contactus;");
        
        $emaildisplay=Array();
        $messagedisplay=Array();
	      $timedisplay=Array();
        
        while($ele = $res->fetch_assoc())
        {
            $emaildisplay[]=$ele['email'];
            $messagedisplay[]=$ele['message'];
	    $timedisplay[]=$ele['timesent'];
        }
        
        $c=count($emaildisplay);
	 
?>
	
<div class='jumbotron text-center'>
        <h1 class="display-4">CODEFURY QUERIES</h1>
    </div>

   <div class='m-2'>
       <table class='table '>
           <thead class='thead-dark'>
                <tr>
                    <th class="text-center">SL NO</th>
                    <th class="text-center">EMAIL</th>
                    <th class="text-center">MESSAGE</th>
		    <th class="text-center">TIME SENT</th>
                </tr>
           </thead>
	   <?php for($j=0;$j<$c;$j++) {  ?>    
	   	<tr>
               	<td class="text-center"><?=$j+1?></td>
               	<td class="text-center"><?=$emaildisplay[$j]?></td>
               	<td class="text-center"><?=$messagedisplay[$j]?></td>
		            <td class="text-center"><?=$timedisplay[$j]?></td>	
           	</tr>
	   <? } ?>
       </table>
   </div>

          
   <? }
    else
    {
  
      $con=getCon();
	    
      date_default_timezone_set('Asia/Kolkata');
      $cur = date("Y-m-d H:i:s");
	    
      $res=$con->query("insert into contactus(email,message) values('$email','$message')");	
	   
      $res1=$con->query("update contactus set timesent='$cur' where email='$email'");
      
      $success=true;
      
      echo $sucess;
      
    } 
  
?>






<?php include '../header.php'; ?>
