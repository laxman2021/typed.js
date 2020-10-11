<?php  
$lat =  arg(1);
$long = arg(2);
?>

<table width="600" border="0">
	<tr>
		<th scope="col" width="400">
		<?php
			if(isset($lat) && isset($long))
			{
				echo 'Name :'.'<br/>';
				echo 'city :'.'<br/>';
				echo 'Address :'.'<br/>';
			}	
		?>	
		</th>
		<th scope="col" style:''>
			<?php
				if(isset($lat) && isset($long))
				{
					echo "<iframe width='400' height='300' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.co.in/?ie=UTF8&amp;ll=$lat,$long&amp;spn=0.319734,0.617294&amp;t=m&amp;z=11&amp;output=embed'></iframe><br />";
				}	
			?>
		</th>
	</tr>
</table>




