<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.05.2019
 * Time: 15:43
 */

namespace Console\Controller\Creator;


class ControllerCreator
{
    private $ic = __DIR__ . '/../../app/controllers/index/';
    private $uc = __DIR__ . '/../../app/controllers/user/';

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function indexCreator()
    {
        $this->newCreator($this->ic);
    }

    public function userCreator()
    {
        $this->newCreator($this->uc);
    }

    private function newCreator($path)
    {
        $new_file = fopen($path.$this->name.'.php', 'w');
                    fwrite($new_file, 'test');
                    fclose($new_file);

    }
}