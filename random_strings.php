<!DOCTYPE html>
<html>
<head>
       		<meta charset="utf-8" />
		<title>10 Random characters</title>
		
</head>
<body>

	<?php	
		
		function swap(&$x,&$y){
			
			$temp=$x;
			$x=$y;
			$y=$temp;
		
		}
		
		function my_sort(&$arr,$size){
		
			for($i=0;$i<$size-1;++$i)
			for($j=$i+1;$j<$size;++$j)
				if( strcmp( $arr[$i] , $arr[$j] ) > 0  )
					swap($arr[$i],$arr[$j]);
		
		
		
		}
	
		
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
		my_sort($arr,$str_numb);
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

