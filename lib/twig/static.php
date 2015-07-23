<?php
class twig_static extends Twig_Extension{
    public function getName()
    {
        return 'static';
    }

    public function getFilters()
    {
        return array(
            'css' => new Twig_Filter_Function('style'),
            'js' => new Twig_Filter_Function('script'),
        );
    }
}