<?php
class tr_cache extends phpFastCache
{
    protected static $_instance = null;

    /**
     * @return tr_cache
     */
    public static function cache()
    {
        $className = get_called_class();
        if (!isset(self::$_instance[$className]) || !self::$_instance[$className]) {
            $cacheConfig = tr::config()->get("cache");
            if(!is_dir(ROOT_PATH."/".$cacheConfig['path'])) mkdir(ROOT_PATH."/".$cacheConfig['path'],0777 ,true);
            self::$_instance[$className] = new $className;
            tr_cache::$storage =$cacheConfig['storage'];
            tr_cache::$securityKey =$cacheConfig['path'];
            tr_cache::$path = ROOT_PATH;
        }
        return self::$_instance[$className];
    }

}