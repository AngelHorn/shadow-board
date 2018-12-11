<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/11
 * Time: 12:14
 */

class TcpRoom
{
    static $list = array();

    public static function getList()
    {
        return self::$list;
    }

    public static function setList($list)
    {
        self::$list = $list;
    }

}