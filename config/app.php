<?php
return array(
    "debug" => true,
    "namespaces" => array('tr','fn',"twig"),
    "apps" => array( 'font','admin'),
    "static_version"=>"20150712",
    "db" => array(
        "default"=>array(
            "auto_time" => false,
            "prefix" => "2tag_",
            "encode" => "",
            "master"=> array(
                "host" => "localhost",
                "user" => "root",
                "port"=>"3306",
                "password" => "root",
                "db_name" => "2tag",
            )
        )
    ),
    "mail"=>array(
        "enable"=>false,
        "smtp"=>array(
            'host' => 'smtp.qq.com',
            'username' => '1234854444',
            'password' => 'xxxxx',
            'secure' => 'ssl',
            "port"=>"465",//578
            "timeout"=>"30",
        ),
        "sender"=>'qq <1234854444@qq.com>',
    ),
    'memcached' => 'localhost:11211',
    "session"=>array(
        "handle"=>"file",//file,memcache
        "param"=>array(
            array("hostname"=>"127.0.0.1","port"=>11211,"weight"=>100)
        )
    ),
    "minify"=>array(
        "js"=>array(
            "static/js/jquery.js",
            "static/bs/js/bootstrap.js",
            "static/js/util.js"
        ),
        "css"=>array()
    ),
);
