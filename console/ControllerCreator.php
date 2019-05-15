<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.05.2019
 * Time: 15:43
 */

namespace Console\Controller\Creator;


use Console\Classes\Constructor\ClassConstructor;
use mysql_xdevapi\Exception;

class ControllerCreator extends ClassConstructor
{
    private $ic = __DIR__ .'/../app/controllers/index/';
    private $uc = __DIR__ .'/../app/controllers/user/';

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function indexCreator()
    {
        $this->checkController($this->uc, self::userConstructor($this->name));
        $this->newCreator($this->ic, self::indexConstructor($this->name));
    }

    public function userCreator()
    {
        $this->checkController($this->uc, self::userConstructor($this->name));
        $this->newCreator($this->uc, self::userConstructor($this->name));
    }

    private function newCreator($path, $body)
    {
        $new_file = fopen($path.$this->name.'.php', 'w');
                    fwrite($new_file, $body);
                    fclose($new_file);

    }

    private function checkController($path, $className)
    {
        $file = file_exists($path.$className.'.php');
        var_dump($file);

//        if(!$file) throw new \Exception('This class already exist');
    }
}