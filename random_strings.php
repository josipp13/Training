<!DOCTYPE html>
<html>
<head>
       		<meta charset="utf-8" />
		<title>10 Random characters</title>
		
</head>
<body>

	<?php
		$str_numb=10; $str_len=5;
		for($i=0;$i<$str_numb;++$i)
		{	
			
			$str='';
			
			for($j=0;$j<$str_len;++$j)
			{
				$str.=chr( rand( ord('a'), ord('z') )  );
				
	
			}
			
			$arr[$i]=$str;
		}
	?>
	
	<p>Random unordered strings</p>	
	
	<ul>	
		<?php	
			for($i=0;$i<$str_numb;++$i)
				echo "<li>".$arr[$i]."</li>";
		
		?>
	</ul>
	
	<?php
		for($i=0;$i<$str_numb-1;++$i)
			for($j=$i+1;$j<$str_numb;++$j)
				if( strcmp( $arr[$i] , $arr[$j] ) > 0  )
				{
					$temp=$arr[$i];
					$arr[$i]=$arr[$j];	
					$arr[$j]=$temp;
				}
		
	?>
	
	<p>Ordered strings</p>	
	
	<ol>	
		<?php	
			for($i=0;$i<$str_numb;++$i)
				echo "<li>".$arr[$i]."</li>";
		
		?>
	
	</ol>
	
	

</body>


</html> 

