
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"	"http://www.w3.org/TR/html4/strict.dtd">

<html>

	<head>
		<title>Hands of Clay - Pottery and classes for able and disabled students</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		
		
				<link href="./page.css" rel="stylesheet" type="text/css" >
                
               
                
	</head>

 
	<body>
	
<?php
// These lines are mandatory.
require_once './Mobile_Detect.php';
$detect = new Mobile_Detect;
$mobile=false;
if ($detect->isMobile() or	$detect->isTablet() )
{
$mobile=true;
}
include_once("./template.php");
$currentPage = "studio";

                    
					
						if ($mobile) 
						{
							echo '<img class="inlineImage" src="./images/studio.jpg" style="max-width:70%;">';
							echo '<div style="float:left; width:100%">';
							echo '<img class="inlineImage" src="./images/Logo2.png" style="max-width:30%; " >';
						}
					
					else
						{
							echo '<div style="float:left; width:100%">';
							echo '<img class="inlineImage" src="./images/studio.jpg" style="max-width:50%;">';
							echo '<img class="inlineImage" src="./images/logo2.png" style="max-width:30%; " >';
						}
						echo "<br>";
						
						 
							echo '<div style="width:100%; margin-top:' ;
							if ($mobile)
								{ echo '0%; ">';}
							else
								{ echo '10%; ">';}
						?>
						The Clayhouse studio operates from the grounds of Casulas' Powerhouse arts centre.<br> <br>
						The studio is a teaching and work facility run by the association. <br>
					</div>	
						<br>
					<?php 
							echo '<div style="width:100%; margin-top:' ;
							if ($mobile)
								{ echo '5%; ">';}
							else
								{ echo '8%; ">';}
						
						
							echo '<a href="https://www.facebook.com/TheClayhouseCasula/"><img class="inlineImage" src="./images/';
							if ($mobile)
								{echo 'FB_FindUsOnFacebook-320.png" style="float:right; margin-right:5%; max-width:40%">';}
							else
								{echo 'FB_FindUsOnFacebook-144.png" style="float:right; margin-right:5%">';}
	
						?>							
						
						</a>
							
						<h2>Address:</h2>
						1 Powerhouse Rd<br>
						Casula<br>
						NSW, 2170<br>
					</div>	
						
					
					
					</div>


		</div>
	</body>
</html>