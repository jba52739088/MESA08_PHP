<?php

    function test(){
        echo func_get_arg(4);
    }

    function testv2(){
        $args = func_num_args();
        foreach ($args as $v){
            echo "{$v}<br>";
        }
    }

    testv2(1,2,3,4,'Brad','iii',false);