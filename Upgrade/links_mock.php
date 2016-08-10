
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"	"http://www.w3.org/TR/html4/strict.dtd">

<html>
 
	<head>
		<title>Hands of Clay - Pottery and classes for able and disabled students</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		
		
				<link href="./page.css" rel="stylesheet" type="text/css" > 
  <script src="./js/jquery.min.js"></script> 
                  <script src="./js/float.js"></script>
                
               
                
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

						
					
					echo '<table style="width:';
					if ($mobile)
							{echo '100%';	}
						else
							{echo '80%';}
					echo'; ">';
					
					?>
					
					
					
					<tr > 
						<td rowspan="1" >
						<?php
							echo '<image class="inlineImage" src="';
							if ($mobile)
								{ echo './images/FB_FindUsOnFacebook-320.png" style="max-width:500%; width:100%; height:50%; max-height:500%;';}
							else
								{ echo './images/FB_FindUsOnFacebook-144.png" style=" max-width:30%;';}
							 
							echo ' float:right; margin:0;  margin-right:5%;" >';
							
							?>
						</td>
						
						<td style="border-bottom-style:dotted; ">	
							<a href="https://www.facebook.com/TheClayhouseCasula/" style="text-decoration:none;">	The Clayhouse Facebook Page		</a> 
						</td>
					</tr>
								
					<tr >
						<td rowspan="4">
						<?php
							echo '<image class="inlineImage" src="./images/cpac-logo.png" style="float:right; margin:0; margin-top:10%; margin-right:5%;';
							if ($mobile)
								{ echo ' max-width:500%; width:100%; height:50%; max-height:500%;';}
							else
								{ echo ' max-width:30%; width:30%; ';}
							echo '" >';
							
							?>
						</td>
						<td style=" padding-top:4%;">
							<a href="http://www.casulapowerhouse.com/" style="text-decoration: none;"> Casula Power House Art Centre	</a> 
						</td>
					</tr>
					
					<tr> 
						<td > Email: reception@casulapowerhouse.com  </td> 
					</tr>
					
					<tr> 
						<td > Phone: (02) 9824 1121 </td>
					</tr>
					
					<tr> 
						<td style="border-bottom-style: dotted;"> Address: 1 Powerhouse Road, Casula NSW, 2170 </td> 
					</tr>
						
						
							
					<tr >
						<td rowspan="5">
						<?php
							echo '<image class="inlineImage" src="./images/living_museum_logo.jpg" style="float:right; margin:0; margin-top:10%; margin-right:5%;';
							if ($mobile)
								{ echo ' max-width:500%; width:100%; height:30%; max-height:500%;';}
							else
								{ echo ' max-width:50%; width:50%; ';}
							echo '" >';
							
							?>
						</td>
						<td style=" padding-top:4%;">
							<a href="http://www.livingmuseum.com.au/" style="text-decoration: none;"> Fairfield Living Museum	& Gallery</a> 
						</td>
					</tr>
					
					<tr> 
						<td> Email: museumgallery@fairfieldcity.nsw.gov.au  </td> 
					</tr>
					
					<tr> 
						<td > Phone: (02) 9725 0190 </td>
					</tr>
					
					<tr> 
						<td> Address: 634 The Horsley Drive, </td>
					</tr>
							
					<tr> 
							<td style="border-bottom-style: dotted;">Smithfield NSW, 2164 </td> 
					</tr>
							
					<tr> 
						<td rowspan="3" >
						<?php
							echo '<image class="inlineImage" src="./images/walker_ceramics_logo.png" style="float:right; margin:0; margin-top:10%; margin-right:5%;';
							if ($mobile)
								{ echo ' max-width:500%; width:100%; height:90%; max-height:500%;';}
							else
								{ echo ' max-width:30%;';}
							echo '" >';
							
							?>
						</td>
						<td style="padding-top:4%;"><a href="http://www.walkerceramics.com.au/" style="text-decoration: none; float:left;"> 
							Walker Ceramics					</a>  
						</td>
					</tr>
					<tr> <td > Email: sales@walkercermaics.com.au </td> </tr>
					<tr> <td style="border-bottom-style: dotted;"> Address: 21 Research Drive, Croydon South, VIC, 3136 </td> </tr>							
					
					
					<tr>
					<td rowspan="3">
					<?php
							echo '<image class="inlineImage" src="./images/Australian-Ceramics-Logo.png" style="float:right; margin:0; margin-top:10%; margin-right:5%;';
							if ($mobile)
								{ echo ' max-width:500%; width:100%; height:50%; max-height:500%;';}
							else
								{ echo ' max-width:30%; width:30%; ';}
							echo '" >';
							
							?>
					
					</td>
					<td style=" padding-top:4%;">	<a href="http://www.australianceramics.com/" style="text-decoration: none;"> 
							Australian Ceramics</a> </td> </tr>
					<tr> <td > Email: mail@australianceramics.com  </td> </tr>
					<tr> <td style="border-bottom-style: dotted;"> Phone: (02) 1300 720 124 </td> </tr>
					
					
					<tr>
					<td rowspan="3">
					<?php
							echo '<image class="inlineImage" src="./images/northcote_logo1.png" style="float:right; margin:0; margin-top:10%; margin-right:0%;';
							if ($mobile)
								{ echo ' max-width:500%; width:100%; height:40%; max-height:500%;';}
							else
								{ echo ' max-width:50%; width:50%; ';}
							echo '" >';
							
							?>
					</td>
					<td style=" padding-top:4%;">	<a href="http://www.northcotepottery.com.au/" style="text-decoration: none;"> 
							Northcote pottery				</a> </td> </tr>					
					<tr> <td > Email: nsw@northcotepottery.com  </td> </tr>
					<tr> <td style="border-bottom-style: dotted;"> Phone: (02) 8867 6900 </td> </tr>
					
					
					<tr>
					
					<td rowspan="4">
					<?php
							echo '<image class="inlineImage" src="./images/blackwattle_logo.jpg" style="float:right; margin:0; margin-bottom:10%; margin-right:0%;';
							if ($mobile)
								{ echo ' max-width:500%; width:100%; height:50%; max-height:500%;';}
							else
								{ echo ' max-width:50%; width:50%; ';}
							echo '" >';
							
							?>
					</td>
					<td style=" padding-top:4%;">	<a href="http://store.blackwattle.net.au/" style="text-decoration: none;"> 
							Black Wattle Pottery			</a> </td> </tr>
					<tr> <td > Phone: (02) 9829 5555 </td> </tr>
					<tr> <td >  Email: blackwattlepottery@bigpond.com  </td> </tr>
					<tr> <td style="border-bottom-style: dotted;"> Address: 2/20 Stennett Road, Ingleburn NSW, 2565 </td> </tr>							
									
						
					</table>
					
					
				
			




		</div>
	</body>
</html>