<?php
	$a=1;
	$arr=[22, 34, 5, 234, 59, 321, 2, 0, 2, 122];
	$b=count($arr);
	for ($i=0; $i <$b ; $i++) { 
		if (strrpos($arr[$i], '2')!==false) {
			$b++;
			for ($j=$b-1; $j > $i ; $j--) {
				$arr[$j]=$arr[$j-1];
			}
			$i++;
			$arr[$i]= $a;

		}

	}
	var_dump($arr);
?>