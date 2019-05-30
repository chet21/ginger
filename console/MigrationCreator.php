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
    private $path = __DIR__ . '/../var/scheme';

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
}