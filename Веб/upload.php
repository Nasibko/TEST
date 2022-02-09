<?php
	$file = $_FILES["csv"]	;

	move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);
	if (($fp=fopen("uploads/test.csv", "r"))!==false) {

		while (($data=fgetcsv($fp,0,";"))!==false) {
			$list[]= $data;
		}

		fclose($fp);
	}
	//$data = serialize($list[0]);
	//file_put_contents("uploads/1.txt", $data);
	$a=fopen("uploads/1.txt", "w");
	$line=implode(' ', $list[0]); 
	fwrite($a, $line);
	fclose($a);

	$b=fopen("uploads/2.log", "w");
	$line=implode(' ', $list[1]); 
	fwrite($b, $line);
	fclose($b);

	$c=fopen("uploads/3.html", "w");
	$line=implode(' ', $list[2]); 
	fwrite($c, $line);
	fclose($c);



?>

<pre>
	<?php

	print_r($file);

	?>	
</pre>
