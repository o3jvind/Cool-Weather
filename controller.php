<?php

/*
 * @author   O3JVIND <postkassen@oejvind.dk>
 * @license  See attached license file
 */
 
namespace Application\Block\CoolWeather;

use Concrete\Core\Block\BlockController;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{

    protected $btTable = "btCoolWeather";
    protected $btInterfaceWidth = "400";
    protected $btInterfaceHeight = "600";
    protected $btDefaultSet = null;
    protected $btCacheBlockRecord = true;

    public function getBlockTypeName()
    {
        return t('Cool Weather');
    }

  //  Not needed
  //  Using HTML5 required
  //   public function validate($data)
  //   {
  //       $e = Core::make('error');
  //       if (!$data['api']) {
  //           $e->add(t('You need an API key.'));
  //       return $e;
  //     } elseif (!$data['id']) {
  //           $e->add(t('You need an ID for a city.'));
  //       return $e;
  //   }
  // }



    public function getBlockTypeDescription()
    {
        return t('A weather block based on data from OpenWeather');
    }

    public function save($data)
    {
        parent::save($data);
    }


    public function get_icon($icon)
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

public function get_wind_direction_icon($winddirection_current)
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

public function set_windunits($units) {
	if($units === 'metric') {
	return 'm/s';
	} elseif ($units === 'imperial') {
	return 'm/h';
	}
}
}
