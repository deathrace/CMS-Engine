<?php

namespace Engine;

class Core extends \Engine\AbstructCore
{

    public static $view;
    
    public static function init() {
        
        self::$view = new \Smarty();
        
    }
    
    public static function Controller() {
        
        self::$controller(
            self::$get->action, 
            self::$get->controller
        );
        
    }
    
    public static function getAbstructCore() {
        
        return self::$Core;
        
    }

}
