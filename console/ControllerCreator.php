<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.05.2019
 * Time: 15:43
 */

namespace Console\Controller\Creator;


use Console\Classes\Constructor\ClassConstructor;

class ControllerCreator extends ClassConstructor
{
    private $ic = __DIR__ .'/../app/controllers/index/';
    private $uc = __DIR__ .'/../app/controllers/user/';

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        $this->message($this->name);
    }

    public function indexCreator()
    {
        if(!$this->checkController($this->ic, $this->name)){
            $this->newCreator($this->ic, self::indexConstructor($this->name));
        }
    }

    public function userCreator()
    {
        if(!$this->checkController($this->uc, $this->name)){
            $this->newCreator($this->uc, self::userConstructor($this->name));
        }
    }

    public function newCreator($path, $body)
    {
        $new_file = fopen($path.$this->name.'.php', 'w');
                    fwrite($new_file, $body);
                    fclose($new_file);

    }

    private function checkController($path, $className)
    {
        $file = file_exists($path.$className.'.php');

        if($file) throw new \Exception('This class already exist');
    }

    private function message($className)
    {
        echo 'A new class '.$className.' has been created.';
    }

}