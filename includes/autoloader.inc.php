<?php

    spl_autoload_register('MyAutoLoader');
    
    function MyAutoLoader($ClassName){


        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        

        if(strpos($url ,'includes') !== false){
        $path = '../includes';

        }
        else{
        $path = 'classes/';
        }
        $extention = '.class.php';
 
        require_once($path . $ClassName . $extention);
    }