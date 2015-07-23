<?php
class tr_controller{
    public static $twig=null;
    private  static $_variable = array();

    static function getParam($str = null,$default=null)
    {
        return tr::getParam($str,$default);
    }

    function display($path=array(),$param=array()){
        if(!$path){
            $class = get_called_class();
            $method = get_called_method($class);
            if($class){
                $path = implode("/",explode("_",$class))."/".$method.".html";
            }
        }
        $param = array_merge(self::$_variable,$param);
        $this->tpl()->display($path, $param);
    }

    function render($path=array(),$param=array()){
        return $this->tpl()->render($path, $param);
    }

    function tpl(){
        if(self::$twig) return self::$twig;
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem(ROOT_PATH.'/view');
        $twig = new Twig_Environment($loader, array(
            'cache' =>ROOT_PATH. '/cache/templates_c',
            'auto_reload' => true,
            'autoescape'=>"html",
        ));
        self::$twig = $twig;
        tr_hook::fire("twig_add_ext",self::$twig);
        return self::$twig;
    }

    function errorReturn($info=null){
        return tr_error::returnError($info);
    }

    function __set($key,$value){
        self::$_variable[$key]=$value;
    }
}