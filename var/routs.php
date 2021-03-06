<?php

return array(
    // авторизація реєстрація вихід controller
    'enter' => 'enter/index',
    'reg' => 'registration/index',
    'out', 'index/out',

    // перегляд новин
    'news/([0-9]+)' => 'news/one/$1',
    'category/([a-z]+)' => 'category/category/$1',

    // default
    '' => 'index/index',
    '/' => 'index/index',

    // admin
    'admin' => 'AdminPage/index',

    //test
    'test' => 'test/index',
    'test/(\d{2}-\d{2}-\d{2})' => 'test/index/$1',

    // Search

    'search' => 'search/index'

);

//return [
//    'index' => [
//
//    ],
//    'user' => [
//
//    ],
//    'secure' => [
//
//    ],
//    'admin' => [
//
//    ],
//
//];