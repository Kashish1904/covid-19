<?php
/*
//$parameter = $_GET('param');

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://corona-virus-world-and-india-data.p.rapidapi.com/api_india",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: corona-virus-world-and-india-data.p.rapidapi.com",
		"x-rapidapi-key: 58e22d6e68mshe1c11304079c68cp1c9232jsn99e50784d1db"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$data = json_decode($response, true);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} 

?>