<div class="headbar">
		<?php  
                        echo '<h1';
                          if ($mobile) {	echo ' style= "font-size:300%; margin-left:10%";';}
						echo'>';
			
			echo '<img class="headbarImage" src="./images/hand004.png"';
                          if ($mobile) {	echo ' style= "width:3%"';}
			echo '>';
			
			echo '<img class="headbarImage" src="./images/hand003.png"';
                          if ($mobile) {	echo ' style= "width:4%"';}
			echo '>';
			
			echo 'Hands of Clay';
			
			echo '<img class="headbarImage" src="./images/hand006.png"';
                          if ($mobile) {	echo ' style= "width:4%"';}
			echo '>';
			
			echo '<img class="headbarImage" src="./images/hand005.png"';
                          if ($mobile) {	echo ' style= "width:3%"';}
			echo '>';
			?>

			</h1>
		</div>

<?php
	
 
                        echo '<div class="sidebar" ';
                        if ($mobile) {	echo ' style= "max-width:25%"';} 
                        echo '>'; 
                               
                          echo '<table class="sidebarTable"' ; 
                          if ($mobile) {	echo ' style= "font-size:130%"';}
                          echo ' >';
                          
                     
                echo '<tr> <td class="sidebarTD"> <a href="./">					<img class="sidebarImage" src="';
				if ($currentPage=="home")
					{echo './images/foo_current.png';}
				else
					{echo './images/foo.png';}
				echo '"  alt ="Homepage Link"> 	</a>  </td> </tr>';
				
				
                echo '<tr> <td class="sidebarTD"> <a href="./">					<img class="sidebarImage" src="';
				if ($currentPage=="classes")
					{echo './images/foo_current.png';}
				else
					{echo './images/foo.png';}
				echo '" alt ="Classes Link"> 		</a> </td> </tr> ';
				
				
				  echo '<tr> <td class="sidebarTD"> <a href="./studio_mock.php">					<img class="sidebarImage" src="';
				if ($currentPage=="studio")
					{echo './images/foo_current.png';}
				else
					{echo './images/foo.png';}
				echo '" alt ="Studio Link">  		</a></td> </tr>';
				
				
                echo '<tr> <td class="sidebarTD"> <a href="./gallery_mock.php">					<img class="sidebarImage" src="';
				if ($currentPage=="gallery")
					{echo './images/foo_current.png';}
				else
					{echo './images/foo.png';}
				echo '" alt ="Galleries Link"> 	</a></td> </tr>';
				
				
                echo '<tr> <td class="sidebarTD"> <a href="./">					<img class="sidebarImage" src="';
				if ($currentPage=="contact")
					{echo './images/foo_current.png';}
				else
					{echo './images/foo.png';}
				echo '" alt ="Contact Us Link">	</a></td> </tr>';
				
				
                echo '<tr> <td class="sidebarTD"> <a href="./links_mock.php">					<img class="sidebarImage" src="';
				if ($currentPage=="links")
					{echo './images/foo_current.png';}
				else
					{echo './images/foo.png';}
				echo '" alt ="Links Page Link"> 	</a></td> </tr>';
                
				?>

		</table>
		</div>	
		

	
                <?php  
                        echo '<div class="content" ';
                        if ($mobile) {	echo ' style= "max-width:55%; margin-right:20%"';} 
                        echo '>'; 
                        ?>