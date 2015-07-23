<?php
class font_index extends tr_controller{
    function get(){
        $this->a="hello";
//        $rs =adminuserDao::gets();
//        tagDao::selectRow("delete from 2tag_admin_user");
//        tagDao::gets();
//        tr::log($rs);
//        tr::log($rs);
//        tr_session::session()->setValue("hello","hello world");
//        echo tr_session::session()->getValue("hello");
//        $this->js = script('global.js');
        $this->display();
    }

    function test(){
        $this->a="test";
        $this->display();
    }
}