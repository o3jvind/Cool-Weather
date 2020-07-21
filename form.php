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

if (!isset($iconsize)) {
    $iconsize = '48';
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

<div class="help-block">Sign up at  <a href="https://home.openweathermap.org/users/sign_up" target="_blank">https://home.openweathermap.org/users/sign_up</a> to get a free API key</div>

<fieldset>
<div class="form-group">
    <label class="control-label" for="api"><?=t('API Key')?></label>
    <input type="text" class="form-control" name="api" value="<?php echo $api?>">
</div>

<div class="form-group">
        <label class="control-label"><?php  echo t('Select units')?></label>
        <select name="units" class="form-control">
            <option value="metric" <?php echo($this->controller->displayTag == "metric" ? "selected" : "")?>><?=t('Metric')?></option>
            <option value="imperial" <?php echo($this->controller->displayTag == "imperial" ? "selected" : "")?>><?=t('Imperial')?></option>
        </select>
    </div>

<div class="form-group">
    <label class="control-label" for="id"><?=t('ID (City ID)')?></label>
    <input type="text" class="form-control" name="id" value="<?php echo $id?>">
</div>

<div class="form-group">
        <label class="control-label"><?php  echo t('Select language')?></label>
        <select name="language" class="form-control">
            <option value="af" <?php echo($this->controller->displayTag == "af" ? "selected" : "")?>><?=t('Afrikaans')?></option>
            <option value="al" <?php echo($this->controller->displayTag == "al" ? "selected" : "")?>><?=t('Albanian')?></option>
            <option value="ar" <?php echo($this->controller->displayTag == "ar" ? "selected" : "")?>><?=t('Arabic')?></option>
            <option value="az" <?php echo($this->controller->displayTag == "az" ? "selected" : "")?>><?=t('Azerbaijani')?></option>
            <option value="bg" <?php echo($this->controller->displayTag == "bg" ? "selected" : "")?>><?=t('Bulgarian')?></option>
            <option value="cz" <?php echo($this->controller->displayTag == "cz" ? "selected" : "")?>><?=t('Czech')?></option>
            <option value="en" <?php echo($this->controller->displayTag == "en" ? "selected" : "")?>><?=t('English')?></option>
            <option value="eu" <?php echo($this->controller->displayTag == "eu" ? "selected" : "")?>><?=t('Basque')?></option>
            <option value="fa" <?php echo($this->controller->displayTag == "fa" ? "selected" : "")?>><?=t('Persian (Farsi)')?></option>
            <option value="fi" <?php echo($this->controller->displayTag == "fi" ? "selected" : "")?>><?=t('Finnish')?></option>
            <option value="fr" <?php echo($this->controller->displayTag == "fr" ? "selected" : "")?>><?=t('French')?></option>
            <option value="he" <?php echo($this->controller->displayTag == "he" ? "selected" : "")?>><?=t('Hebrew')?></option>
            <option value="hr" <?php echo($this->controller->displayTag == "hr" ? "selected" : "")?>><?=t('Croatian')?></option>
            <option value="hu" <?php echo($this->controller->displayTag == "hu" ? "selected" : "")?>><?=t('Hungarian')?></option>
            <option value="id" <?php echo($this->controller->displayTag == "id" ? "selected" : "")?>><?=t('Indonesian')?></option>
            <option value="it" <?php echo($this->controller->displayTag == "it" ? "selected" : "")?>><?=t('Italian')?></option>
            <option value="ja" <?php echo($this->controller->displayTag == "ja" ? "selected" : "")?>><?=t('Japanese')?></option>
            <option value="kr" <?php echo($this->controller->displayTag == "kr" ? "selected" : "")?>><?=t('Korean')?></option>
            <option value="la" <?php echo($this->controller->displayTag == "la" ? "selected" : "")?>><?=t('Latvian')?></option>
            <option value="lt" <?php echo($this->controller->displayTag == "lt" ? "selected" : "")?>><?=t('Lithuanian')?></option>
            <option value="mk" <?php echo($this->controller->displayTag == "mk" ? "selected" : "")?>><?=t('Makedonian')?></option>
            <option value="no" <?php echo($this->controller->displayTag == "no" ? "selected" : "")?>><?=t('Norvegian')?></option>
            <option value="nl" <?php echo($this->controller->displayTag == "nl" ? "selected" : "")?>><?=t('Dutch')?></option>
            <option value="pl" <?php echo($this->controller->displayTag == "pl" ? "selected" : "")?>><?=t('Polish')?></option>
            <option value="pt" <?php echo($this->controller->displayTag == "pt" ? "selected" : "")?>><?=t('Potuguese')?></option>
            <option value="pt_br" <?php echo($this->controller->displayTag == "pt_br" ? "selected" : "")?>><?=t('Português Brasil')?></option>
            <option value="ro" <?php echo($this->controller->displayTag == "ro" ? "selected" : "")?>><?=t('Romanian')?></option>
            <option value="ru" <?php echo($this->controller->displayTag == "ru" ? "selected" : "")?>><?=t('Russian')?></option>
            <option value="se" <?php echo($this->controller->displayTag == "se" ? "selected" : "")?>><?=t('Swedish')?></option>
            <option value="sk" <?php echo($this->controller->displayTag == "sk" ? "selected" : "")?>><?=t('Slovak')?></option>
            <option value="sp" <?php echo($this->controller->displayTag == "sp" ? "selected" : "")?>><?=t('Spanish')?></option>
            <option value="sr" <?php echo($this->controller->displayTag == "sr" ? "selected" : "")?>><?=t('Serbian')?></option>
            <option value="th" <?php echo($this->controller->displayTag == "th" ? "selected" : "")?>><?=t('Thai')?></option>
            <option value="ua" <?php echo($this->controller->displayTag == "ua" ? "selected" : "")?>><?=t('Ukranian')?></option>
            <option value="vi" <?php echo($this->controller->displayTag == "vi" ? "selected" : "")?>><?=t('Vietnamese')?></option>
            <option value="zh_cn" <?php echo($this->controller->displayTag == "zh_cn" ? "selected" : "")?>><?=t('Chinese Traditional')?></option>
            <option value="zu" <?php echo($this->controller->displayTag == "zu" ? "selected" : "")?>><?=t('Zulu')?></option>
            </select>
    </div>

<div class="form-group">
    <label class="control-label" for="header"><?=t('Header text')?></label>
    <input type="text" class="form-control" name="header" value="<?php echo $header?>">
</div>

<div class="form-group">
    <label class="control-label" for="iconsize"><?=t('Icon size')?></label>
    <input type="number" class="form-control" name="iconsize" value="<?php echo $iconsize?>">
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

</fieldset>
