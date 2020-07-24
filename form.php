<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

/*
 * @author   O3JVIND <postkassen@oejvind.dk>
 * @license  See attached license file
 */

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

if (!isset($iconshadow)) {
    $iconshadow = '2px 2px 8px #00000066;';
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
    <label class="control-label">API</label>
    <?php echo $form->text('api', $api, array('required' => 'required')); ?>
</div>

<div class="form-group">
   <label class="control-label">Units</label>
   <?php echo $form->select('units', array('imperial' => t('Imperial'), 'metric' => t('Metric')), $units, array('style' => 'width: 400px;')) ?>
    </div>

<div class="form-group">
    <label class="control-label">ID:</label>
    <?php echo $form->text('id', $id, array('required' => 'required')); ?>
</div>



 <div class="form-group">
    <label class="control-label">Language</label>
    <?php echo $form->select('language', array('af' => t('Afrikaans'), 'al' => t('Albanian'), 'ar' => t('Arabic'), 'az' => t('Azerbaijani'), 'bg' => t('Bulgarian'), 'cz' => t('Czech'), 'da' => t('Danish'), 'de' => t('German'), 'el' => t('Greese')
    , 'en' => t('English'), 'eu' => t('Basque'), 'fa' => t('Persiian (Farsi)'), 'fi' => t('Finnish'), 'fr' => t('French'), 'gl' => t('Galisian'), 'he' => t('Hebrew'), 'hi' => t('Hindi'), 'hr' => t('Croatian'), 'hu' => t('Hungarian')
    , 'id' => t('Indonesian'), 'ja' => t('Japanese'), 'kr' => t('Korean'), 'la' => t('Latvian'), 'lt' => t('Lithuanian'), 'mk' => t('Makedonian'), 'no' => t('Norvegian'), 'nl' => t('Dutch')
    , 'pl' => t('Polish'), 'pt' => t('Portuguese'), 'pt_br' => t('Português Brasil'), 'ro' => t('Romanian'), 'ru' => t('Russian'), 'se' => t('Swedish'), 'sk' => t('Slovak'), 'sl' => t('Slovenian'), 'sp' => t('Spanish')
    , 'sr' => t('Serbian'), 'th' => t('Thai'), 'tr' => t('Turkish'), 'ua' => t('Ukaranian'), 'vi' => t('Vietnamese'), 'zh_cn' => t('Chinese Simplified'), 'zh_tw' => t('Chinese Traditional'), 'zu' => t('Zulu')), $language, array('style' => 'width: 400px;')) ?>
</div>

<div class="form-group">
    <label class="control-label">Header text:</label>
    <?php echo $form->text('header', $header) ?>
</div>

<div class="form-group">
    <label class="control-label">Icon size in pixels:</label>
    <?php echo $form->number('iconsize', $iconsize) ?>
</div>

<div class="form-group">
    <label class="control-label">Icon shadow:</label>
    <?php echo $form->text('iconshadow', $iconshadow) ?>
</div>

<div class="form-group">
    <label class="control-label">Feels like:</label>
    <?php echo $form->text('feelslike', $feelslike) ?>
</div>

<div class="form-group">
    <label class="control-label">Humidity text:</label>
    <?php echo $form->text('humidity', $humidity) ?>
</div>

<div class="form-group">
    <label class="control-label">Wind text:</label>
    <?php echo $form->text('wind', $wind) ?>
</div>

</fieldset>
