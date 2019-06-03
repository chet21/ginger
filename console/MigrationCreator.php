<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.05.2019
 * Time: 15:49
 */

namespace Console\Creator;


use Console\Constructor\MigrationConstructor;
use Console\Constructor\SchemeConstructor;

class MigrationCreator

{
    private $path_scheme = __DIR__ . '/../var/scheme';
    private $path_migration = __DIR__ . '/../app/migration';

    private $miration;
    private $scheme;

    public function __construct()
    {
        $this->miration = new MigrationConstructor();
        $this->scheme = new SchemeConstructor();
    }

    public function create_migration()
    {
        $this->miration->create_new_migration();
    }

    public function create_scheme()
    {

    }

    public function run_scheme()
    {

    }

    public function newCreator($path, $body)
    {
        $new_file = fopen($path.$this->name.'.php', 'w');
        fwrite($new_file, $body);
        fclose($new_file);

    }
}