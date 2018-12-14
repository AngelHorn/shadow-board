<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/11
 * Time: 12:14
 */

class TcpRoom
{
    public static $list = array(1,2,3,4,5);

    public static function getList()
    {
        return self::$list;
    }

    public static function setList($fd)
    {
        self::$list["sid-" . $fd] = $fd;
    }

    public static function removeList($fd)
    {
        unset(self::$list["sid-" . $fd]);
    }

}