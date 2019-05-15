<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.05.2019
 * Time: 8:56
 */

namespace Console\Classes\Constructor;


class ClassConstructor
{
    private static $body;

    public static function indexConstructor($className)
    {
        self::$body =
"
<?php

namespace App\Controllers;

class $className extends BaseIndexController
{

    public function indexAction()
    {
        echo 'test message';
    }
}
";
        return self::$body;
    }

    public function userConstructor($className)
    {
        self::$body =
            "
                <?php

                namespace App\Controllers;

                class $className extends BaseUserController
                {
                    public function indexAction()
                        {
                            echo 'test message';
                        }
                }
            ";
        return self::$body;

    }
}