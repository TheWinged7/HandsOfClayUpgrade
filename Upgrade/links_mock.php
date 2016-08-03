
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
$currentPage = "links";
include_once("./template.php");

						
						
						echo '<img class="inlineImage" src="./images/TerracottaDragon08.jpg" style="max-width:';
						if ($mobile)
							{echo '40%';	}
						else
							{echo '50%';}
					echo '; float:right;">';
					
					
					echo '<table style="width:';
					if ($mobile)
							{echo '50%';	}
						else
							{echo '40%';}
					echo'; padding-top:3%;">';
					
					?>
					
					
					
					<tr > <td style="border-bottom-style:dotted; padding-top:3%">	<a href="https://www.facebook.com/TheClayhouseCasula/" style="text-decoration:none;">	
							The Clayhouse Facebook Page		</a> </td> </tr>
					<tr> <td style="border-bottom-style: dotted; padding-top:3%;">	<a href="http://www.casulapowerhouse.com/" style="text-decoration: none;">
							Casula Power House Art Centre	</a> </td> </tr>
					<tr> <td style="border-bottom-style: dotted; padding-top:3%;">	<a href="http://www.walkerceramics.com.au/" style="text-decoration: none;"> 
							Walker Ceramics					</a> </td> </tr>
					<tr> <td style="border-bottom-style: dotted; padding-top:3%;">	<a href="http://www.australianceramics.com/" style="text-decoration: none;"> 
							Australian Ceramics				</a> </td> </tr>
					
					<tr> <td style="border-bottom-style: dotted; padding-top:3%;">	<a href="http://www.northcotepottery.com.au/" style="text-decoration: none;"> 
							Northcote pottery				</a> </td> </tr>					
					<tr> <td style="border-bottom-style: dotted; padding-top:3%;">	<a href="http://www.blackwattle.net.au/" style="text-decoration: none;"> 
							Black Wattle Pottery			</a> </td> </tr>					
									
						
					</table>
					
					


		</div>
	</body>
</html>