<div class="headbar">
		<?php  
                        echo '<h1';
                          if ($mobile) {	echo ' style= "font-size:400%; "';}
						echo'>';
			
			echo '<img class="headbarImage" src="./images/hand005_coloured.png"';
                          if ($mobile) {	echo ' style= "width:4%"';}
			echo '>';
			
			echo '<img class="headbarImage" src="./images/hand003_coloured.png"';
                          if ($mobile) {	echo ' style= "width:5%"';}
			echo '>';
			
			echo 'Hands of Clay';
			
			echo '<img class="headbarImage" src="./images/hand006_coloured.png"';
                          if ($mobile) {	echo ' style= "width:5%"';}
			echo '>';
			
			echo '<img class="headbarImage" src="./images/hand004_coloured.png"';
                          if ($mobile) {	echo ' style= "width:4%"';}
			echo '>';
			?>

			</h1>
		</div>


		
<div class="navbar">
<?php
	echo '<table class="navbarTable"' ; 
    if ($mobile) 
		{	echo ' style= "font-size:150%; margin-right:5%; height:10%"';	}
    echo ' >';
    echo '<tr>';
                     
		echo '<td class="navbarTD"> <a href="./" style="text-decoration:none';
		
		echo '"> Home 	</a>  </td>' ;
			   
			   
		echo '<td class="navbarTD"> <a href="./classes_mock.php" style="text-decoration:none';
		
		echo '"> Classes 	</a>  </td>' ;
			   
			   
		echo '<td class="navbarTD"> <a href="./studio_mock.php" style="text-decoration:none';
		echo '" > Studio 	</a>  </td>';
			
               
			echo '<td class="navbarTD"> <a href="./gallery_mock.php" style="text-decoration:none';
			   
			   echo '"> Galleries 	</a>  </td> ';

				echo '<td class="navbarTD"> <a href="./contact_mock.php" style="text-decoration:none';
			  
			   echo '"> Contact Us 	</a>  </td>' ;			   
				
				
				echo '<td class="navbarTD"> <a href="./links_mock.php" style="text-decoration:none';
			   
			   echo '"> Other Links 	</a>  </td>' ;	
			   
				?>
				</tr>
			</table>
		</div>	
		

	
                <?php  
                        echo '<div class="content" ';
                        if ($mobile) {	echo ' style= "max-width:70%; margin-right:20%"';} 
                        echo '>'; 
                        ?>