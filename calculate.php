<?php

	$maths = $_POST["s1"];
	$sd1 =  $_POST["s2"];
	$prof =  $_POST["s3"];
	$hci =  $_POST["s4"];
	$db =  $_POST["s5"];
	$sa =  $_POST["s6"];
	$ai =  $_POST["s7"];
	$ss =  $_POST["s8"];
	$sd2 =  $_POST["s9"];
	$sysdev =  $_POST["s10"];
	$netwk =  $_POST["s11"];
	$dwa =  $_POST["s12"];
	$da =  $_POST["s13"];
	$ppm =  $_POST["s14"];
	$csp1 =  $_POST["s15"];
	$csp2 =  $_POST["s16"];
	$cloud =  $_POST["s17"];
	$wad =  $_POST["s18"];
	
	echo "before we calculate your grade and save in database, please have a look at your year 1 mark which you entered in the form";
	
	echo " math: " .$maths."<br>";
	echo " software development: " .$sd1."<br>";
	echo " professionalism and entr: " .$prof."<br>";
	echo " human computer interaction: " .$hci."<br>";
	
	$year2avg = (( $ai +$ss + $sd2 + $sysdev + $netwk + $dwa) / 600 ) *30;
	$year3avg = (($da + $ppm + $csp1 + $csp2 + $cloud + $wad) /600)*70;
	
	echo $year2avg. "<br>";
	echo $year3avg;



?>