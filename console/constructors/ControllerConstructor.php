<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.05.2019
 * Time: 8:56
 */

namespace Console\Classes\Constructor;


class ControllerConstructor
{
    public $body;

    public $name;
    public $type;

    public function __construct($className, $type)
    {
        $this->name = $className;
        $this->type = $type;

        $this->create();
    }

    private function create()
    {
        $this->add_body("<?php \n");
        $this->add_body("\n");
        $this->add_body("namespace App\Controllers;\n");
        $this->add_body("\n");
        $this->add_body("use App\Configuration\Base".ucfirst($this->type)."Controller;\n");
        $this->add_body("\n");
        $this->add_body("class $this->name extends BaseIndexController\n");
        $this->add_body("{\n");
        $this->add_body("   public function indexAction()\n");
        $this->add_body("   {\n");
        $this->add_body("       echo 'test message';\n");
        $this->add_body("   }\n");
        $this->add_body("}\n");
    }

    public function add_body($code)
    {
        $this->body .= $code;
    }
}