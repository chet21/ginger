<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.05.2019
 * Time: 15:54
 */

namespace Lib\Location;


class UserTranslit
{
    static function generate_ru($str)
    {
        $str = mb_strtolower($str, 'utf-8');
        $list = array(
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ж' => 'j',
            'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
            'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ч' => 'ch', 'ц' => 'ts', 'ш' => 'sh',
            'щ' => 'shch', 'ы' => 'u', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => '-',
            'ъ'=> '', 'ь'=> '');
        return strtr($str, $list);
    }

    static function generate_ua($str)
    {
        $str = mb_strtolower($str, 'utf-8');
        $list = array(
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'є' => 'e', 'ж' => 'j',
            'з' => 'z', 'і' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
            'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ч' => 'ch', 'ц' => 'ts', 'ш' => 'sh',
            'щ' => 'shch', 'и' => 'u', 'е' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => '-', 'ь'=> '');
        return strtr($str, $list);
    }
}