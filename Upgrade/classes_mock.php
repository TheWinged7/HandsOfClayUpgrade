
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
$currentPage = "classes";
include_once("./template.php");


echo '<table style="width:';
					if ($mobile)
							{echo '90%; font-size:130%';	}
						else
							{echo '60%;';}
					echo' ">';
?>
                     	
					<tr> 
						<td> <b> All classes conducted at:	</b></td>
					</tr>
					 
					<tr> 
						<td style="padding-left:10%; font-size:90%">The Clay House	</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">1 Powerhouse Rd, Casula	</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%; border-bottom-style:dotted">NSW, 2170	</td>
					</tr>
					
					
					<tr> 
						<td style="padding-top:5%"><b>Child Classes:	</b></td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">Mondays, during school terms</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">From 4:00pm to 5:30pm</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%; border-bottom-style:dotted">At $110 for 8 weeks of classes.</td>
					</tr>
					
					
					
					<tr> 
						<td style="padding-top:5%"><b>Adult Classes:	</b></td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">Mondays, during school terms</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">From 6:30pm to 8:30pm</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%; border-bottom-style:dotted">At $140 for 8 weeks of classes.</td>
					</tr>
					
					
		
					<tr> 
						<td style="padding-top:5%"><b>Pinch Pot Classes:	</b></td>
					</tr>
					
					<tr> 
						<td style="font-size:90%;"> A special class for people with a disability. </td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%; padding-top:2%">First Friday of every month</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">From 10:00am to 12:00pm</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%; border-bottom-style:dotted">At $10 per person.</td>
					</tr>
					
					
					<tr> 
						<td style="padding-top:5%"><b>Bookings for classes available at:	</b></td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">Casula Power House Arts Centre</td>
					</tr>
					
					<tr> 					
						<td style="padding-left:10%; font-size:90%">1 Powerhouse Rd, Casula </td> 
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">NSW, 2170	</td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">Phone: (02) 9824 1121 </td> 
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%; border-bottom-style:dotted">
							<a href="http://www.casulapowerhouse.com/" style="text-decoration: none;"> www.casulapowerhouse.com </a>
						</td> 
					</tr>
					
					<tr> 
						<td style="padding-top:5%"><b>For group booking enquires contact:	</b></td>
					</tr>
					
					<tr> 
						<td style="padding-left:10%; "> <b>Natalie Valiente </b></td> 
					</tr>
					
					<tr> 
						<td style="padding-left:10%; font-size:90%">Email: natalie@handsofclay.com.au </td> 
					</tr>
					<tr> 
						<td style="padding-left:10%; font-size:90%; border-bottom-style:dotted;">Phone: 04 3103 2932 </td> 
					</tr>
					
					
				</table>	



		</div>
	</body>
</html>