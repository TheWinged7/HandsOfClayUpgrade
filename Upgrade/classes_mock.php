
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"	"http://www.w3.org/TR/html4/strict.dtd">

<html>

	<head>
		<title>Hands of Clay - Pottery and classes for able and disabled students</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8, width=device-width, initial-scale=1" >


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
$currentPage = "classes";
include_once("./template.php");

			?>					




				<div  style="margin-bottom:1%">
					<b>	All classes are held at:	</b>
					<ul style="margin-top:0; list-style:none">
						<li>	<b> The Clay House	</b> </li>
						<li>1 Powerhouse Rd, Casula </li>
						<li>NSW, 2170 </li>
					</ul>
				</div >


				<div  style="border-style:solid; border-color:orange;  margin-bottom:2%"   >



					<div id="adultTitle" >
						<b>	Adult Classes:	</b>				 
						<table id="adult" style="width:100%;  margin-top:0;">
							<tr>
								<td style=" width:100%;">
									<?php
						echo '<ul style="margin-top:0; margin-bottom:0; list-style:none;  padding-left:10%;';
						if ($mobile)
							{echo 'font-size:140%; width:80%;';}
						else
							{echo ' width:100%;';}
						echo '">';
					?>

									<li style="display:inline; list-style-type:none; padding-right: 2%; ;  line-height:100%;">

										<b>WHEN:</b>
									</li>
									<li style="display: inline; list-style-type:none;;  line-height:100%; ">	
										6:30pm to 8:30pm, every Monday during school terms.
									</li>

									<li>
									</li>

									<li style="display: inline; list-style-type:none; padding-right: 2%; line-height:100%; ">
										<b>PRICE:</b>
									</li>
									<li style="display: inline; list-style-type:none; ;  line-height:80%; ">
										$140 per person for 8 weeks of classes.
									</li>
								</ul>
							</td>

						</tr>

						<?php
		 if ($mobile)
			{
				echo '<tr>	<td style="padding-top:5%; width:100%;">	</td></tr>';
			}
		 ?>


					</table >

				</div>

				<div id="childTitle"  style=" margin-top:2%;">
					<b>	Child Classes:	</b>			 

					<table id="child" style="width:100%; margin-top:0;">
						<tr>

							<td style=" width:100%;">
								<?php
						echo '<ul style="margin-top:0; margin-bottom:0; list-style:none;  padding-left:10%;';
						if ($mobile)
							{echo 'font-size:140%; width:80%;';}
						else
							{echo ' width:100%;';}
						echo '">';
					?>
								<li style="display:inline; list-style-type:none; padding-right: 2%;  line-height:100%;">

									<b>WHEN:</b>
								</li>
								<li style="display: inline; list-style-type:none; line-height:100%;">	
									4:00pm to 5:30pm, every Monday during school terms.

								</li class="dummy">
								<li>

								</li>

								<li style="display: inline; list-style-type:none; padding-right: 2%; line-height:100%;">
									<b>PRICE:</b>
								</li>
								<li style="display: inline; list-style-type:none;  ">
									$110 per person for 8 weeks of classes.
								</li>

							</ul>
						</td>

						<?php
		 if ($mobile)
			{
				echo '<tr>	<td style="padding-top:5%; width:100%;">	</td></tr>';
			}
		 ?>


					</table >
				</div>



				<div style="margin-top: 3%;">
					<b>For bookings of Child or Adult classes, contact:</b>
					<ul style="margin-top:0; list-style:none;  " >
						<li style=" list-style-type:none; padding-right: 2%; font-size:120%;">
							<b>	Natalie Valiente	</b>
						</li>
						<li style="; list-style-type:none;">
							<b>	Email:	</b>	natalie@handsofclay.com.au 
						</li>
						<li style=" list-style-type:none;">
							<b>	Phone:	</b>	04 3103 2932 
						</li>
					</ul>


				</div>




			</div >




			<div  style="border-style:solid; border-color:orange;  margin-bottom:2%"  >
				<div id="pinchTitle"  style=" margin-top:2%;">
					<b>	Pinch Pot Classes:	</b>			 

					<table id="pinch" style="width:100%; margin-top:0;">
						<tr>

							<td style=" width:100%;">
								<?php
						echo '<ul style="margin-top:0; margin-bottom:0; list-style:none;  padding-left:10%;';
						if ($mobile)
							{echo 'font-size:140%; width:80%;';}
						else
							{echo ' width:100%;';}
						echo '">';
					?>
								<li style="display:inline; list-style-type:none; padding-right: 2%;  line-height:100%;">
									<B>A special class for people with a disability.</B>
								</li>
							</li class="dummy">
							<li>
								<li style="display:inline; list-style-type:none; padding-right: 2%;  line-height:100%;">

									<b>WHEN:</b>
								</li>

								<li style="display: inline; list-style-type:none; line-height:100%;">	
									10:00am to 12:00pm, on the first Friday of every month.

								</li class="dummy">
								<li>

								</li>

								<li style="display: inline; list-style-type:none; padding-right: 2%; line-height:100%;">
									<b>PRICE:</b>
								</li>
								<li style="display: inline; list-style-type:none;  ">
									$10 per person.
								</li>

							</ul>
						</td>

						<?php
		 if ($mobile)
			{
				echo '<tr>	<td style="padding-top:5%; width:100%;">	</td></tr>';
			}
		 ?>


					</table >
				</div>


				<div style="margin-top: 3%;">
					<b>For bookings of Pinch Pot classes or, School holiday classes, contact:</b>
					<ul style="margin-top:0; list-style:none;  " >
						<li style=" list-style-type:none; padding-right: 2%; font-size:120%;">
							<b>	Casula Powerhouse Art Centre	</b>
						</li>
						<li style="; list-style-type:none;">
							<b>	Email:	</b>	reception@casulapowerhouse.com
						</li>
						<li style=" list-style-type:none;">
							<b>	Phone:	</b>	(02) 9824 1121 
						</li>
					</ul>


				</div>

			</div>



			<div  style="border-style:solid; border-color:orange;  margin-bottom:2%"  >

				<div style="margin-top: 3%;">
					<b>For all other Bookings and enquiries <br>
					Such as: <span style="margin-left:5%;"> school groups bookings or, </span>
					<span style="margin-left:5%;"> group booking rates, contact:</b> </span>
					 
					<ul style="margin-top:0; list-style:none;  " >
						<li style=" list-style-type:none; padding-right: 2%; font-size:120%;">
							<b>	Natalie Valiente	</b>
						</li>
						<li style="; list-style-type:none;">
							<b>	Email:	</b>	natalie@handsofclay.com.au 
						</li>
						<li style=" list-style-type:none;">
							<b>	Phone:	</b>	04 3103 2932 
						</li>
					</ul>


				</div>

			</div>


		</div>
	</body>
</html>