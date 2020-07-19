<?php
defined('C5_EXECUTE') or die('Access Denied.');


$api_url = 'http://api.openweathermap.org/data/2.5/weather?id=' . $id . '&units=' . $units . '&lang=' . $language . '&appid=' . $api;

$forecast = json_decode(file_get_contents($api_url));

//Current Conditions
$temperature_current = round($forecast->main->temp);
$temperature_feels_like_current = round($forecast->main->feels_like);
$description_current = $forecast->weather[0]->description;
$windspeed_current = round($forecast->wind->speed);
$humidity_current = $forecast->main->humidity;

//Get and set the appropriate weather icon
$icon = $forecast->weather[0]->icon;

function get_icon($icon)
{
	if ($icon === '01d') {
		$the_icon = '<i class="wi wi-day-sunny"></i>';
		return $the_icon;
	} elseif ($icon === '01n') {
		$the_icon = '<i class="wi wi-night-clear"></i>';
		return $the_icon;
	} elseif ($icon === '02d') {
		$the_icon = '<i class="wi wi-day-sunny-overcast"></i>';
		return $the_icon;
	} elseif ($icon === '02n') {
		$the_icon = '<i class="wi wi-night-alt-partly-cloudy"></i>';
		return $the_icon;
	} elseif ($icon === '03d') {
		$the_icon = '<i class="wi wi-day-cloudy-high"></i>';
		return $the_icon;
	} elseif ($icon === '03n') {
		$the_icon = '<i class="wi wi-night-cloudy-high"></i>';
		return $the_icon;
	} elseif ($icon === '04d') {
		$the_icon = '<i class="wi wi-day-cloudy-high"></i>';
		return $the_icon;
	} elseif ($icon === '04n') {
		$the_icon = '<i class="wi wi-night-cloudy-high"></i>';
		return $the_icon;
	} elseif ($icon === '09d') {
		$the_icon = '<i class="wi wi-day-showers"></i>';
		return $the_icon;
	} elseif ($icon === '09n') {
		$the_icon = '<i class="wi wi-night-alt-showers"></i>';
		return $the_icon;
	} elseif ($icon === '10d') {
		$the_icon = '<i class="wi wi-day-rain"></i>';
		return $the_icon;
	} elseif ($icon === '10n') {
		$the_icon = '<i class="wi wi-night-alt-rain"></i>';
		return $the_icon;
	} elseif ($icon === '11d') {
		$the_icon = '<i class="wi wi-day-thunderstorm"></i>';
		return $the_icon;
	} elseif ($icon === '11n') {
		$the_icon = '<i class="wi wi-night-thunderstorm"></i>';
		return $the_icon;
	} elseif ($icon === '13d') {
		$the_icon = '<i class="wi wi-snow"></i>';
		return $the_icon;
	} elseif ($icon === '13n') {
		$the_icon = '<i class="wi wi-snow"></i>';
		return $the_icon;
	} elseif ($icon === '50d') {
		$the_icon = '<i class="wi wi-fog"></i>';
		return $the_icon;
	} elseif ($icon === '50n') {
		$the_icon = '<i class="wi wi-fog"></i>';
		return $the_icon;
	} else {
		$the_icon = '<i class="wi wi-thermometer"></i>';
		return $the_icon;
	}
}

//Get and set the appropriate wind direction icon
$winddirection_current = $forecast->wind->deg;

function get_wind_direction_icon($winddirection_current)
{
	if ($winddirection_current >= 338) {
		$the_wind_direction_icon = '<i class="wi wi-direction-down"></i>';
		return $the_wind_direction_icon;
	} elseif ($winddirection_current <= 23) {
		$the_wind_direction_icon = '<i class="wi wi-direction-down-right"></i>';
		return $the_wind_direction_icon;
	} elseif ($winddirection_current > 23 && $winddirection_current <= 68) {
		$the_wind_direction_icon = '<i class="wi wi-direction-down-left"></i>';
		return $the_wind_direction_icon;
	} elseif ($winddirection_current > 68 && $winddirection_current <= 113) {
		$the_wind_direction_icon = '<i class="wi wi-direction-left"></i>';
		return $the_wind_direction_icon;
	} elseif ($winddirection_current > 113 && $winddirection_current <= 158) {
		$the_wind_direction_icon = '<i class="wi wi-direction-up-left"></i>';
		return $the_wind_direction_icon;
	} elseif ($winddirection_current > 158 && $winddirection_current <= 203) {
		$the_wind_direction_icon = '<i class="wi wi-direction-up"></i>';
		return $the_wind_direction_icon;
	} elseif ($winddirection_current > 203 && $winddirection_current <= 248) {
		$the_wind_direction_icon = '<i class="wi wi-direction-up-right"></i>';
		return $the_wind_direction_icon;
	} elseif ($winddirection_current > 248 && $winddirection_current <= 293) {
		$the_wind_direction_icon = '<i class="wi wi-direction-right"></i>';
		return $the_wind_direction_icon;
	} elseif ($winddirection_current > 293 && $winddirection_current < 338) {
		$the_wind_direction_icon = '<i class="wi wi-direction-down-right"></i>';
		return $the_wind_direction_icon;
	}
}

function set_windunits($units) {
	if($units === 'metric') {
	return 'm/s';
	} elseif ($units === 'imperial') {
	return 'm/h';
	}
}

?>

	<div class="text-center">
		<div class="card p-4" style="margin: 0 auto; max-width:320px;">
			<h2><?php echo $header ?></h2>
			<p class="lead"><?php echo ucfirst($description_current); ?></p>
			<span class="my-3" style="font-size:48px"><?php echo get_icon($icon); ?></span>
			<h3><?php echo $temperature_current ?>&deg;</h3>
			<p><?php echo $feelslike . ' ' . $temperature_feels_like_current; ?>&deg;</p>
			<p><?php echo $humidity . ' ' . $humidity_current; ?>%</p>
			<p><?php echo $wind . ' ' . $windspeed_current . ' ' . set_windunits($units). ' '. get_wind_direction_icon($winddirection_current); ?></p>
		</div>
	</div>
