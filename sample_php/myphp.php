<?php

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://localhost:5000/");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

if($output) {
	print_r($output);	
} else {
	echo "<h4 style='color:indianred;'>Flask Server Not Running... </h4>";
}

// close curl resource to free up system resources
curl_close($ch);  

?>
