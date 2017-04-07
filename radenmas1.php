<?php
	 $json_string3 = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/almanac/q/ID/Semarang.json");
	$json_string1 = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/astronomy/q/IA/Mugas.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/planner_07010731/q/IA/Mugas.json");
	
	$parsed_json1 = json_decode ($json_string1);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	
	
	$ageOfMoon = $parsed_json1->{'moon_phase'}->{'ageOfMoon'};
	$sunrise = $parsed_json1->{'moon_phase'}->{'sunrise'}->{'hour'};
	$sunset = $parsed_json1->{'moon_phase'}->{'sunset'}->{'hour'};
	
	$min = $parsed_json2->{'trip'}->{'temp_high'}->{'min'}->{'C'};
	$max = $parsed_json2->{'trip'}->{'temp_high'}->{'max'}->{'C'};
	$avg = $parsed_json2->{'trip'}->{'temp_high'}->{'avg'}->{'C'};
	
	$negara = $parsed_json3->response->results[0]->country_name;
  	$kota = $parsed_json3->response->results[0]->city;
	echo "Info";
	echo"<br>";
	echo "Nama Negara : $negara<br>";
  	echo "Nama Kota : $kota<br>";
	echo "<br>";
	echo "Suhu ";
	echo "<br>";
	echo "Minimal : ${min}\n";
	echo "<br>";
	echo "Maximal : ${max}\n";
	echo "<br>";
	echo "Rata-rata : ${avg}\n";
	echo "<br>";
	echo "Umur bulan : ${ageOfMoon}\n";
	echo "<br>";
	echo "Sunrise pada pukul : ${sunrise}\n";
	echo "<br>";
	echo "Sunset pada pukul : ${sunset}\n";
	echo "<br>";
   
?>