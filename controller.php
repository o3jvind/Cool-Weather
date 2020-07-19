<?php

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

    public function validate($data)
    {
        $e = Core::make('error');
        if (!$data['api']) {
            $e->add(t('You need an API key.'));
        }
        return $e;
    }

    public function getBlockTypeDescription()
    {
        return t('A weather block based on data from OpenWeather');
    }

    public function save($data)
    {
        parent::save($data);
    }
}
