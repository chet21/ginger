<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.05.2019
 * Time: 15:57
 */

namespace Console\Constructor;


class MigrationConstructor
{
    private $path = __DIR__.'/../../app/migration/';
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    static function base_construction()
    {
        return "";
    }




}