<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.05.2019
 * Time: 15:43
 */

namespace Console\Creator;


use Console\Classes\Constructor\ControllerConstructor;

class ControllerCreator extends BaseCreator
{
    public $name;
    public $type;
    public $path;

    public function __construct($param)
    {
        $this->name = trim($param[0], '-').'Controller';
        $this->type = trim($param[1], '-');
        $this->path = __DIR__ ."/../app/controllers/".$this->type."/";
    }

    public function __destruct()
    {
        $this->create();
        $this->message($this->name);
    }

    public function create()
    {
        if(!$this->checkClass($this->path, $this->name)){
            $this->createNewClass($this->path, new ControllerConstructor($this->name, $this->type));
        }
    }

}