<?php

namespace App\Configuration;


use Lib\Location\UserLocation;

use System\CSRF;
use System\IndexOption;
use System\TwigView;
use System\Lang;

abstract class BaseController
{
    protected $twig;
    protected $options;
    protected $lang;
    protected $connection;
    protected $user_id;


    public function __construct()
    {
//        $this->verification();

        $this->twig  = new TwigView();

        if($this->user_id['user0id']){
            $this->twig->addG('user', $this->user_id);
            $this->twig->addG('csrf', CSRF::token($this->user_id['verification0hash']));
        }
    }

    private function verification()
    {
//        $data = array();

//        $data['hash'] = ($_SESSION['hash']) ?: null;
//        $data['login'] = ($_SESSION['login']) ?: null;


//        if($_SESSION['hash'] != '' && $_SESSION['login'] != ''){
//            $request = DB::connection()
//                ->query("SELECT id FROM user WHERE hash = '$hash' AND login = '$login'")
//                ->fetchAll(\PDO::FETCH_ASSOC);
//            $this->user_id = $request[0]['id'];
//        }
    }
}