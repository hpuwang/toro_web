<?php
class tr{
    private static $groupCheck=array();
    static function getParam($str = null,$default=null)
    {
        parse_str(file_get_contents('php://input'), $data);
        add_s($data);
        $data = $data? $data:array();
        $all = array_merge($_REQUEST, $data);
        if (!$str) {
            return $all;
        }
        return isset($all[$str]) ? $all[$str] : $default;
    }

    static function config()
    {
        return tr_config::config();
    }

    static function log($value,$type=0){
        if(!$value) return $value;
        if(!tr::config()->get("app.debug")) return ;
        $ip = getOlineIp();
        $time = date('Y-m-d H:i:s');
        $str = "[time:".$time."]-[ip:".$ip."]";
        if(is_string($value)){
            $str .="-".$value;
            tr_log::log($str);
        }elseif(is_array($value)){
            $rand = "log:".rand();
            tr::group($rand);
            tr_log::log($str);
            tr_log::table($value);
            tr::groupEnd($rand);
        }elseif(is_object($value)){
            $rand = "log:".rand();
            tr::group($rand);
            tr_log::log($str);
            tr_log::log($value);
            tr::groupEnd($rand);
        }

    }

    static function group($value){
        if(!tr::config()->get("app.debug")) return ;
        if(!isset(self::$groupCheck[$value])){
            self::$groupCheck[$value]=1;
            tr_log::group($value);
        }
    }

    static function groupEnd($value){
        if(!tr::config()->get("app.debug")) return ;
        if(self::$groupCheck[$value]){
            tr_log::groupEnd($value);
        }
    }

    static function error($value){
        if(!tr::config()->get("app.debug")) return ;
        tr_log::error($value);
    }

    static function warn($value){
        if(!tr::config()->get("app.debug")) return ;
        tr_log::warn($value);
    }

    static function info($value){
        if(!tr::config()->get("app.debug")) return ;
        tr_log::info($value);
    }
}