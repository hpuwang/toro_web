<?php
tr_hook::add("twig_add_ext",function($twig){
    $twig->addExtension(new twig_static());
});