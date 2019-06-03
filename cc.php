!/usr/bin/env php

<?php
//
include_once __DIR__.'/vendor/autoload.php';

use Console\ConsoleMessage;

unset($argv[0]);

$command_run = array_shift($argv);
$command = explode(':', $command_run);

if(array_shift($command) == 'create'){

    $command_name = 'Console\\Creator\\'.ucfirst(array_shift($command)).'Creator';
    $new_class = new $command_name($argv);
}else{
    ConsoleMessage::write('Command error', 'danger');
}
