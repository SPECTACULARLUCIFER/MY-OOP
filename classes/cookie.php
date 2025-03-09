<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
class Cookie {
    public static function exists($name) {
        return (isset($_COOKIE[$name])) ? true : false;
    }

    public static function get($name) {
        return $_COOKIE[$name];
    }

    //create the put method first because we just don't delete the cookie we reset it a negative value or a null or empty string

    public static function put($name, $value, $expiry) {
        if(is_int($expiry) && setcookie($name, $value, time() + $expiry, '/')) {
            return true;
        }
        return false;
    }
    

    public static function delete($name) {
         self::put($name, '', time() -1);
    }
}