<?php

	$date = date('Y-m-d', time());

	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300", "2000", "1100", "1089");
	echo "The value of \$year:";
	print_r($year);

	echo"<br>";
	echo"<br>";

	#2

	$date2 = str_replace("-", "/", $date);
	echo"No.2) date format changed with '/': ".$date2."<br>";

	#3

	if(($date2 < $tar))
	{
	   echo"No.3) \$date compared to \$tar: the past <br>";
	}
	else if (($date2 > $tar ))
	{
	   echo"No.3) \$date compared to \$tar: the future<br>";
	}
	else
	{
	   echo"No.3) \$datecompared to \$tar: Oops<br>";
	}	
	
	#4

	$i = strpos($date2, '/');
	echo"No.4) Position of '/' is: ".$i;
	$j = substr($date2, $i+1, strlen($date2));
	#echo" \$j = ".$j."<br>";
	$k = strpos($j, '/');
	$k += $i;
	$k += 1;


	echo" $k <br>"; 

	#5

	$words = str_word_count($date2);
	echo"No. 5) The number of words in \$date are: ".$words."<br>";
	
	#6

	$length = strlen($date2);
	echo"No. 6) The length of \$date is: ".$length."<br>";

	#7

	$fChar = substr($date2, 0, 1);
	$fCharASCII = ord($fChar);
	echo"No.7) The ASCII of the first char in \$date is: ".$fCharASCII."<br";
	#8

	$last2 = substr($date2, (strlen($date2)-1));
	echo"No. 8) Last 2 chars in \$date are: ".$last2."<br>";
?>
	
