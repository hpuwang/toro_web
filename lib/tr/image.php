<?php
use Intervention\Image\ImageManagerStatic as Image;

class tr_image extends Image
{
    protected static $_instance = null;

    /**
     * @return Image
     */
    public static function image()
    {
        $className = get_called_class();
        if (!isset(self::$_instance[$className]) || !self::$_instance[$className]) {

            self::$_instance[$className] = new $className;
        }
        return self::$_instance[$className];
    }
}