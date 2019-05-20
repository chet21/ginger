!/usr/bin/env php

<?php
//
include_once __DIR__.'/vendor/autoload.php';

use Console\ConsoleMessage;


$command_run = $argv[1];
$controller_type = $argv[2];

$x = explode(':', $command_run);
var_dump($x);

if($x[0] == 'create'){
    $new_controller = new Console\Controller\Creator\ControllerCreator($x[1]);

    if(preg_match('/^-u/', $controller_type)){
        $new_controller->userCreator();
    }elseif (preg_match('/^-i/', $controller_type)){
        $new_controller->indexCreator();
    }else{
        throw ConsoleMessage::write(new Exception('Command is wrong'), 'warning');
    }

}else{
    echo 'command error';
}



ConsoleMessage::write(new Exception('Command is wrong'), 'warning');
