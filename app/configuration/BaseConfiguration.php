<?php

namespace App\Configuration;

class BaseConfiguration
{
    static private $data;

    static public function load($file)
    {
       self::$data = require $file;
    }

    static public function set($key, $val)
    {
        self::$data[$key] = $val;
    }

    static public function get($key)
    {
        if(!empty(self::$data[$key])){
            $res = self::$data[$key];
        }else{
            throw new \Exception('This key not exist, on cofiguration file');
        }

        return $res;
    }

}