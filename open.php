<?php

$url = "https://www.data.gouv.fr/fr/datasets/code-officiel-geographique-cog/";
$ch = curl_init();
$curl_init = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
print_r($json);;