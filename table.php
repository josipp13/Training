<!DOCTYPE html>
<html>
<head>
       		<meta charset="utf-8" />
		<title>Zadatak 1</title>
		<style>
		
			table, th, td { border: solid 2px; }
			
			th{
				background-color:black;
				color:white;
			
			}
		
		
		</style>
</head>
<body>

	<table>
		
		<tr>	
		
			<td>*</td>
			<?php	
			
				
				for($i=1;$i<=10;++$i)
				{
						
					echo "<th>$i</th>";			
				
				
				}
			?>
		
		</tr>
		
		
		<?php	
				
			for($i=1;$i<=10;++$i)
			{
				echo "<tr>"."<th>$i</th>";
						
				for($j=1;$j<=10;++$j)
				{
					echo "<td>".$i*$j."</td>";
						
						if($color==="yellow")$color="green";
						else $color="yellow";
					
					
				}
				
				echo "</tr>";	
			}
				
				
		?>
		
		
		
				


	</table>


</body>
</html> 
