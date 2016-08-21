<div class="headbar">
		<?php  
                        echo '<h1';
                          if ($mobile) {	echo ' style= "font-size:400%; "';}
						echo'>';
			
			echo '<img class="headbarImage" src="./images/logos/hand005_coloured.png"';
                          if ($mobile) {	echo ' style= "width:4%"';}
			echo '>';
			
			echo '<img class="headbarImage" src="./images/logos/hand003_coloured.png"';
                          if ($mobile) {	echo ' style= "width:5%"';}
			echo '>';
			
			echo 'Hands of Clay';
			
			echo '<img class="headbarImage" src="./images/logos/hand006_coloured.png"';
                          if ($mobile) {	echo ' style= "width:5%"';}
			echo '>';
			
			echo '<img class="headbarImage" src="./images/logos/hand004_coloured.png"';
                          if ($mobile) {	echo ' style= "width:4%"';}
			echo '>';
			?>

			</h1>
		</div>


		
<div class="navbar">
<?php
	$selected = "#88A3AA";
	
	echo '<table class="navbarTable"' ; 
    if ($mobile) 
		{	echo ' style= "font-size:150%; margin-right:5%; height:10%"';	}
    echo ' >';
    echo '<tr>';
                     

		echo '<td class="navbarTD" ';
		if ($currentPage =="home")
			{echo ' bgcolor="' . $selected . '"';}	
		echo '> <a href="./" style="text-decoration:none; width:100%;";> Home 	</a>  </td>' ;
			   
			   
		echo '<td class="navbarTD" ';
		if ($currentPage =="classes")
			{echo ' bgcolor="' . $selected . '"';}	
		echo '> <a href="./classes_mock.php" style="text-decoration:none; width:100%;";> Classes 	</a>  </td>' ;
			   
				
		echo '<td class="navbarTD" ';
		if ($currentPage =="studio")
			{echo ' bgcolor="' . $selected . '"';}	
		echo '> <a href="./studio_mock.php" style="text-decoration:none; width:100%;";> Studio 	</a>  </td>' ;
				
				
		echo '<td class="navbarTD" ';
		if ($currentPage =="gallery")
			{echo ' bgcolor="' . $selected . '"';}	
		echo '> <a href="./gallery_mock.php" style="text-decoration:none; width:100%;";> Galleries 	</a>  </td>' ;
			
               
		echo '<td class="navbarTD" ';
		if ($currentPage =="contact")
			{echo ' bgcolor="' . $selected . '"';}	
		echo '> <a href="./contact_mock.php" style="text-decoration:none; width:100%;";> Contact Us 	</a>  </td>' ;
			   
			   
		echo '<td class="navbarTD" ';
		if ($currentPage =="links")
			{echo ' bgcolor="' . $selected . '"';}	
		echo '> <a href="./links_mock.php" style="text-decoration:none; width:100%;";> Other Links 	</a>  </td>' ;
						   
				
				
			   
				?>
				</tr>
			</table>
		</div>	
		

	
                <?php  
                        echo '<div class="content" ';
                        if ($mobile) {	echo ' style= " width:80%; max-width:100%; margin-right:10%"';} 
						else if ($currentPage=="links")	{	echo ' style="margin-right:20%"'; }
                        echo '>'; 
                        ?>