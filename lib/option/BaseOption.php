<?php

namespace System;


use Helper\DayTranslate;
use Helper\TranslateDay;
use Helper\TranslateMonth;
use Lib\Location\UserLocation;
use Lib\Location\UserWeather;
use System\ORM;

abstract class BaseOption
{

    public function current_url()
    {
        $url = $_SERVER['REQUEST_URI'];
        if(!$url === '/'){
            $url = explode('/', $url);
            return $url[0];
        }
        return $url;
    }
}
