<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

if (!isset($api)) {
    $api = '';
}

if (!isset($id)) {
    $id = '2624652';
}

if (!isset($units)) {
    $units = 'metric';
}

if (!isset($language)) {
    $language = 'en';
}

if (!isset($header)) {
    $header = 'Current weather in Aarhus';
}

if (!isset($feelslike)) {
    $feelslike = 'Feels Like:';
}

if (!isset($humidity)) {
    $humidity = 'Humidity:';
}

if (!isset($wind)) {
    $wind = 'Windspeed:';
}

?>

<span>Sign up at  <a href="https://home.openweathermap.org/users/sign_up" target="_blank">https://home.openweathermap.org/users/sign_up</a> to get a free API key</span>


<div class="form-group">
    <label class="control-label" for="api"><?=t('API Key')?></label>
    <input type="text" class="form-control" name="api" value="<?php echo $api?>">
</div>

<div class="form-group">
    <label class="control-label" for="units"><?=t('Units (metric or imperial)')?></label>
    <input type="text" class="form-control" name="units" value="<?php echo $units?>">
</div>

<div class="form-group">
    <label class="control-label" for="id"><?=t('ID (City ID)')?></label>
    <input type="text" class="form-control" name="id" value="<?php echo $id?>">
</div>

<div class="form-group">
    <label class="control-label" for="language"><?=t('Language Code')?></label>
    <input type="text" class="form-control" name="language" value="<?php echo $language?>">
</div>

<div class="form-group">
    <label class="control-label" for="header"><?=t('Header text')?></label>
    <input type="text" class="form-control" name="header" value="<?php echo $header?>">
</div>

<div class="form-group">
    <label class="control-label" for="feelslike"><?=t('Feels like text')?></label>
    <input type="text" class="form-control" name="feelslike" value="<?php echo $feelslike?>">
</div>

<div class="form-group">
    <label class="control-label" for="humidity"><?=t('Humidity text')?></label>
    <input type="text" class="form-control" name="humidity" value="<?php echo $humidity?>">
</div>

<div class="form-group">
    <label class="control-label" for="wind"><?=t('Wind text')?></label>
    <input type="text" class="form-control" name="wind" value="<?php echo $wind?>">
</div>