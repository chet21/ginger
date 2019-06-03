<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.06.2019
 * Time: 16:33
 */

namespace Console\Creator;


use Console\Classes\Constructor\ControllerConstructor;
use Console\ConsoleMessage;

abstract class BaseCreator
{
    protected function createNewClass($path, ControllerConstructor $body)
    {
        $new_file = fopen($path.$body->name.'.php', 'w');
        fwrite($new_file, $body->body);
        fclose($new_file);
    }

    protected function checkClass($path, $className)
    {
        $file = file_exists($path.$className.'.php');

        if($file) throw new \Exception('This class already exist');
    }

    protected function message($className)
    {
        ConsoleMessage::write('A new class '.$className.' has been created.', 'info');
    }
}