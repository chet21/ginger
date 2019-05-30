<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.05.2019
 * Time: 14:18
 */

namespace App\Configuration;


abstract class BaseMigration
{
    private $sql;

    public function __construct()
    {

    }

    public function new_table($name)
    {
        return $this;
    }

    public function add_eny($name)
    {
        return $this;
    }


}