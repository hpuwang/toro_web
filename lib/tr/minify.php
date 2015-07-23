<?php
use MatthiasMullie\Minify;
class tr_minify{
    protected static $_instance = null;

    static function minify()
    {
        $className = get_called_class();
        if (isset(self::$_instance[$className]) && self::$_instance[$className]) {
            return self::$_instance[$className];
        }
        self::minifyJs();
        self::minifyCSS();
        return true;
    }

    private static function minifyJs()
    {
        $sourcePathConfig = tr::config()->get("app.minify");
        $minifier = new Minify\JS();
        if($sourcePathConfig['js']){
            foreach($sourcePathConfig['js'] as $v){
                if(isCli()){
                    $v = ROOT_PATH."/public/".$v;
                }
                $minifier->add($v);
            }
        }
        $minifier->minify(ROOT_PATH."/public/asset/global.js");
        return true;
    }

    private static function minifyCSS()
    {
        $sourcePathConfig = tr::config()->get("app.minify");
        $minifier = new Minify\CSS();
        if($sourcePathConfig['css']){
            foreach($sourcePathConfig['css'] as $v){
                $minifier->add($v);
            }
        }
        $minifier->minify(ROOT_PATH."/public/asset/global.css");
        return true;
    }
}