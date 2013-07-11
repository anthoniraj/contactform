<?php
	$fp = fopen("details.csv","r");
	$count = 0;
	while(!feof($fp))
	{
		$line = fgets($fp);
		echo $count . ",".$line , "<br />";
		$count++;
	}
	fclose($fp);
?>		