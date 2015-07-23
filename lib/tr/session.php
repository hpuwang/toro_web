<?php
use Sesshin\Session;
use Sesshin\Store\FileStore;
use Sesshin\Store\DoctrineCache;
use Doctrine\Common\Cache\MemcachedCache;
class tr_session
{
    protected static $_instance = null;

   static function session(){
       $className = get_called_class();
       if (isset(self::$_instance[$className]) && self::$_instance[$className]) {
           return self::$_instance[$className];
       }
        $sessionConfig = tr::config()->get("app.session.handle");
        if($sessionConfig=='file'){
            $path = ROOT_PATH."cache/session";
            if(!is_dir($path)) mkdir($path,0777,true);
            $session = new Session(new FileStore($path));
            self::$_instance[$className]=$session;
            return $session;
        }elseif($sessionConfig=='memcache'){
            $param = tr::config()->get("app.session.param");
            if(class_exists("Memcached")){
                $memcached = new Memcached;
                if(is_array($param)){
                    foreach($param as $v){
                        $memcached->addServer(
                            $v['hostname'], $v['port'], $v['weight']
                        );
                    }
                }else{
                    $memcached->addServer(
                        $param['hostname'], $param['port'], $param['weight']
                    );
                }
            }else{
                $memcached = new Memcache();
                if(is_array($param)) {
                    foreach ($param as $name => $cache_server) {
                        $memcached->connect($cache_server['hostname'], $cache_server['port'], $cache_server['weight']);
                        break;
                    }
                }else{
                    $memcached->connect(
                        $param['hostname'], $param['port'], $param['weight']
                    );
                }
            }
            $session = new Session(new DoctrineCache(new MemcachedCache($memcached)));
            self::$_instance[$className]=$session;
            return $session;
        }
    }

}