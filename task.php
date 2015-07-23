<?php
//css，js压缩
tr_hook::add("task",function(){
    tr_minify::minify();
});
