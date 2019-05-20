<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.05.2019
 * Time: 18:25
 */

namespace Console;

use Shasoft\Console\Console;


class ConsoleMessage
{
    static public function write($message, $type)
    {
        switch ($type){
            case 'info':
                $color = 'light_gray';
                $background = 'cyan';
                break;
            case 'warning':
                $color = 'black';
                $background = 'yellow';
                break;
            case 'danger':
                $color = 'black';
                $background = 'red';
                break;
        }
       return $console_obj = Console::color($color)->bgcolor($background)->write($message)->enter();

    }
}