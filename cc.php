#!/usr/bin/env php

<?php

include_once __DIR__.'/vendor/autoload.php';


$command_run = $argv[1];

$x = explode(':', $command_run);
var_dump($x);

//if($x[0] == 'create'){
    $new_controller = new Console\Controller\Creator\ControllerCreator($x[1]);
//    if(preg_match('/^-u/', $x[2])){
        $new_controller->userCreator();
//    }elseif (preg_match('/^-i/', $x[2])){
//        $new_controller->indexCreator();
//    }else{
//        throw new Exception('Command is wrong');
//    }
//
//}else{
//    echo 'command error';
//}