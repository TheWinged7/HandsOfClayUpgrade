<?php
// These lines are mandatory.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$mobile=false;
if ($detect->isMobile() or	$detect->isTablet() )
{
$mobile=true;
}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"	"http://www.w3.org/TR/html4/strict.dtd">

<html>

	<head>
		<title>Hands of Clay - Pottery and classes for able and disabled students</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		
		
		<link href="page.css" rel="stylesheet" type="text/css" >
                
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <link  href="./js/fotorama.css" rel="stylesheet"> 
                <script src="./js/fotorama.js"></script>
                
	</head>


	<body>
		
	 
		      
        
		
                <?php  
                        echo '<div class="sidebar" ';
                        if ($mobile) {	echo ' style= "max-width:25%"';} 
                        echo '>'; 
                               
                          echo '<table' ; 
                          if ($mobile) {	echo ' style= "font-size:130%"';}
                          echo ' >';
                          
                         ?>
                         
                         
                <tr> <td> <img class="sidebarImage" src="./images/foo.png"  alt ="Homepage Link">  </td> </tr>
                <tr> <td> <img class="sidebarImage" src="./images/foo.png"  alt ="Classes Link">  </td> </tr> 
                <tr> <td> <img class="sidebarImage" src="./images/foo.png"  alt ="Studio Link">  </td> </tr>
                <tr> <td> <img class="sidebarImage" src="./images/foo.png"  alt ="Galleries Link">  </td> </tr>
                <tr> <td> <img class="sidebarImage" src="./images/foo.png"  alt ="Contact Us Link">  </td> </tr>
                <tr> <td> <img class="sidebarImage" src="./images/foo.png"  alt ="Suppliers Link">  </td> </tr>
                <tr> <td> <img class="sidebarImage" src="./images/foo.png"  alt ="Other Links Link">  </td> </tr>
                


		</table>
		</div>	
		
		<h1>Hands of Clay</h1>
		
	
                <?php  
                        echo '<div class="content" ';
                        if ($mobile) {	echo ' style= "max-width:70%"';} 
                        echo '>'; 
                        ?>
                       <div class="fotorama"  data-nav="thumbs" data-width="80%"  data-ratio="800/600" data-hash="true">

                               <img src="./images/3JugsOutside.jgp">
                               <img src="./images/Echidna.jpg">
                               <img src="./images/GreenDragon.jpg">
                               <img src="./images/studio.jpg">
                               
                        </div>


		</div>
	</body>
</html>