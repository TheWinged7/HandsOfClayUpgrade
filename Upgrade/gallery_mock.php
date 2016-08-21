
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"	"http://www.w3.org/TR/html4/strict.dtd">

<html>

	<head>
		<title>Hands of Clay - Pottery and classes for able and disabled students</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		
		
				<link href="./page.css" rel="stylesheet" type="text/css" > 
				<script src="./js/jquery.min.js"></script> 
                  <script src="./js/float.js"></script>
                

                <link  href="./js/fotorama.css" rel="stylesheet"> 
                <script src="./js/fotorama.js"></script>
                
				<script>
				function hideGallery (gallery)
				{
					switch(gallery)
					{
						case 0:
							document.getElementById("personalGallery").style.display= "inline";
							document.getElementById("publicArtGallery").style.display= "none";
							document.getElementById("classGallery").style.display= "none";
							break;
						case 1:
							document.getElementById("personalGallery").style.display= "none";
							document.getElementById("publicArtGallery").style.display= "inline";
							document.getElementById("classGallery").style.display= "none";
							break;
						case 2:
							document.getElementById("personalGallery").style.display= "none";
							document.getElementById("publicArtGallery").style.display= "none";
							document.getElementById("classGallery").style.display= "inline";
							break;
					}
					
				}
				
				
				</script>
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
$currentPage = "gallery";
include_once("./template.php");

						$showPersonal =true;
						$showPublic =false;
						$showClass =false;
						
						$personal = array_diff(scandir('./images/Galleries/Personal'), array('..', '.'));  
						$publicArt = array_diff(scandir('./images/Galleries/PublicArt'), array('..', '.'));  
						$classArt = array_diff(scandir('./images/Galleries/Classwork'), array('..', '.'));  
                        
						arsort($personal);
						
						echo '<div class="gallerySelect" style="max-width:100%; ';
						if ($mobile)
						{
							echo 'margin-left:15%">';
						}
						else
						{
							echo 'margin-left:25%">';
						}
						
						echo ' <button type="button" id="showPersonal" onclick="hideGallery(0);"> Personal Gallery</button> ';
								
						echo ' <button type="button" id="showPublic" onclick="hideGallery(1);"> Public Art Gallery</button> ';
						
						echo ' <button type="button" id="showPublic" onclick="hideGallery(2);"> Classwork Gallery</button> ';
						echo '</div>';
					
					
						echo '<div id="personalGallery" class="fotorama" data-loop="true" data-arrows="always" data-nav="thumbs" data-width="';
						if ($mobile)
							{echo '80%';}
						else
							{echo '60%';}
						echo '"  data-ratio="800/600" data-hash="true"'; 
						
						if (!$showPersonal)
						{
							echo ' style="display:none;"';
						}
						
						echo '>';
						
						foreach($personal as $value) 
						{
							echo '<img src="./images/Galleries/Personal/' . $value .'">';
						}
						echo '</div>';
						
						
						
						
						echo '<div id="publicArtGallery" class="fotorama"  data-nav="thumbs" data-width="';
						if ($mobile)
							{echo '80%';}
						else
							{echo '60%';}
						echo '"  data-ratio="800/600" data-hash="true"'; 
						
						
						if (!$showPublic)
						{
							echo ' style="display:none;"';
						}
						
						echo '>';
						
						foreach($publicArt as $value) 
						{
							echo '<img src="./images/Galleries/PublicArt/' . $value .'">';
						}
						echo '</div>';
						
						
						
						echo '<div id="classGallery" class="fotorama"  data-nav="thumbs" data-width="';
						if ($mobile)
							{echo '80%';}
						else
							{echo '60%';}
						echo '"  data-ratio="800/600" data-hash="true"'; 
						
						if (!$showClass)
						{
							echo ' style="display:none;"';
						}
						
						echo '>';
						
						foreach($personal as $value) 
						{
							echo '<img src="./images/Galleries/Classwork/' . $value .'">';
						}
						echo '</div>';
						
						
					?>
                               
                        


		</div>
	</body>
</html>