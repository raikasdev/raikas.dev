<?php

$response = file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ipaddress);
$data =  @json_decode($response);
$country = $data->geoplugin_countryName;
echo $country;
if ($country == "Finland" AND !isset($_GET['noredir'])) {
    echo "REDIRECT";
    die();
}