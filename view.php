<?php
defined('C5_EXECUTE') or die('Access Denied.');


$api_url = 'http://api.openweathermap.org/data/2.5/weather?id=' . $id . '&units=' . $units . '&lang=' . $language . '&appid=' . $api;

// Use get_headers() function
$headers = @get_headers($api_url);

// Use condition to check the existence of URL
if($headers && strpos( $headers[0], '200')) {
	$status = "URL Exist";
}
else {
	$status = "URL Doesn't Exist";
	// Display result
print_r($headers);
	return;
	
}

$forecast = json_decode(file_get_contents($api_url));

//Current Conditions
$temperature_current = round($forecast->main->temp);
$icon = $forecast->weather[0]->icon;
$temperature_feels_like_current = round($forecast->main->feels_like);
$description_current = $forecast->weather[0]->description;
$windspeed_current = round($forecast->wind->speed);
$humidity_current = $forecast->main->humidity;
$winddirection_current = $forecast->wind->deg;

?>

	<div class="text-center">
		<div class="card p-4" style="margin: 0 auto; max-width:320px;">
			<h2><?php echo $header ?></h2>
			<p class="lead"><?php echo ucfirst($description_current); ?></p>
			<span class="my-3" style="font-size:48px"><?php echo $controller->get_icon($icon); ?></span>
			<h3><?php echo $temperature_current ?>&deg;</h3>
			<p><?php echo $feelslike . ' ' . $temperature_feels_like_current; ?>&deg;</p>
			<p><?php echo $humidity . ' ' . $humidity_current; ?>%</p>
			<p><?php echo $wind . ' ' . $windspeed_current . ' ' . $controller->set_windunits($units). ' '. $controller->get_wind_direction_icon($winddirection_current); ?></p>
		</div>
	</div>
