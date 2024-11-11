<?php 


class Session {
    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function get($key){
        return (isset($_SESSION[$key]))? $_SESSION[$key] : null;
    }

    public static function removeAll(){
        session_destroy();
    }

    public static function remove($key){
           unset($_SESSION[$key]);
    }
    public static function has($key){
       return (isset($_SESSION[$key]))? true : false;
    
    }

    public static function flash($key){
       $value = self::get($key);
       self::remove($key);
       return $value;
    
    }
    public static function getAll($data){ 
       return $_SESSION[$data];
    }

}