
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
$currentPage = "home";
include_once("./template.php");

$path = "./images/Galleries/Personal/"; 

$allImages = array();    



foreach (glob($path ."*.{png,jpg,jpeg}", GLOB_BRACE) as $filename) {
    $allImages[$filename] = filemtime($filename);

}
arsort($allImages);
$newestImages = array_slice($allImages, 0, 5);



?>
                     
					
					<div id="placeholder" style=" width:100%; float:left; padding:0; margin:0;">
					
					
					
					!!!!!PLACEHOLDER TEXT!!!!!<br>
					!!!!!PLACEHOLDER TEXT!!!!!<br>
					
					<?php
					
					echo '<div id="personalGallery" style="display:inline; clear:none; margin:0" class="fotorama" data-loop="true" data-arrows="always" 
					data-nav="thumbs" data-autoplay="true" data-width="';
						if ($mobile)
							{echo '80%';}
						else
							{echo '60%';}
						echo '"  data-ratio="800/600" data-hash="true"'; 
						
						
						
						echo '>';
						
						foreach ($newestImages as $key => $value)
						{
							 echo '<img src="' . $key. '">';
						}
						echo '</div>';
						
						
					
					?>
					
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br><br>
				Suspendisse efficitur dui ante, eu dapibus nunc fermentum at. <br><br>
 				Maecenas eget nulla elementum, dignissim erat ut, vulputate justo. <br><br>
 				Etiam orci erat, hendrerit eu feugiat in, ultricies non ligula. <br><br>
 				In hac habitasse platea dictumst. <br><br>
 				Suspendisse in venenatis ipsum. <br><br>
 				Maecenas odio erat, gravida eu rutrum quis, hendrerit nec tortor. <br><br>
 				Integer vel urna blandit, aliquam turpis a, ultricies nisi. <br><br>
 				Praesent eget faucibus diam. <br><br>
 				Aenean ut malesuada ipsum, ut placerat diam. <br><br>
 				Duis sed semper enim. <br><br>
 				Sed ornare, sem id vulputate maximus, neque erat mattis orci, at lobortis turpis sapien eu ante. <br><br>
 				Nullam id sollicitudin ligula. <br><br>
 				Suspendisse vulputate imperdiet ipsum eu viverra. <br><br>
 				Mauris aliquet porttitor felis ut suscipit. <br><br>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br><br>
				Suspendisse efficitur dui ante, eu dapibus nunc fermentum at. <br><br>
 				Maecenas eget nulla elementum, dignissim erat ut, vulputate justo. <br><br>
 				Etiam orci erat, hendrerit eu feugiat in, ultricies non ligula. <br><br>
 				In hac habitasse platea dictumst. <br><br>
 				Suspendisse in venenatis ipsum. <br><br>
 				Maecenas odio erat, gravida eu rutrum quis, hendrerit nec tortor. <br><br>
 				Integer vel urna blandit, aliquam turpis a, ultricies nisi. <br><br>
 				Praesent eget faucibus diam. <br><br>
 				Aenean ut malesuada ipsum, ut placerat diam. <br><br>
 				Duis sed semper enim. <br><br>
 				Sed ornare, sem id vulputate maximus, neque erat mattis orci, at lobortis turpis sapien eu ante. <br><br>
 				Nullam id sollicitudin ligula. <br><br>
 				Suspendisse vulputate imperdiet ipsum eu viverra. <br><br>
 				Mauris aliquet porttitor felis ut suscipit. <br><br>

				</div>



		</div>
	</body>
</html>