<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/11
 * Time: 12:14
 */

class TcpRoom
{
    public static $list = array();

    public static function getList()
    {
        return self::$list;
    }

    public static function setList($fd)
    {
        self::$list["sid-" . $fd] = array("sid" => $fd);
    }

    public static function removeList($fd)
    {
        unset(self::$list["sid-" . $fd]);
    }

    public static function setPartner($fd, $partner)
    {
        if (isset(self::$list["sid-" . $fd])) {
            self::$list["sid-" . $fd]['partner'] = $partner;
        }
    }


}