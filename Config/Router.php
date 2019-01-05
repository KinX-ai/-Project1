<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 04/01/2019
 * Time: 4:06 CH
 */

class Router
{
    public static function get($controller,$action,$param){
        $controllerClass = ucwords($controller).'Controller';
        if($action!='home' && $controller!='home'){
            $action = $action.ucwords($controller);
            $controllerClass::$action($param);
        }
        else{
            $instance = new $controllerClass;
        }
    }
    public static function post($controller,$action){
        $controllerClass = ucwords($controller).'Controller';
        if($action!='home' && $controller!='home'){
            $action = $action.ucwords($controller);
            $controllerClass::$action();
        }
        else{
            $instance = new $controllerClass;
        }
    }

}