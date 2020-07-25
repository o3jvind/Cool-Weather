<?php


/*
 * @author   O3JVIND <postkassen@oejvind.dk>
 * @license  See attached license file
 */
 

namespace Concrete\Package\CoolWeather;

use Concrete\Core\Package\Package;
use Concrete\Core\Block\BlockType\BlockType;

class Controller extends Package {

	protected $pkgHandle = 'cool_weather';
	protected $appVersionRequired = '8.3.2';
	protected $pkgVersion = '1.0.0';
	
	public function getPackageDescription() 
	{
		return t('A simple weather block.');
	}
	
	public function getPackageName() 
	{
		return t('Cool Weather');
	}
	
	public function install() 
	{
		$pkg = parent::install();
		BlockType::installBlockType('cool_weather', $pkg);
	}

}
