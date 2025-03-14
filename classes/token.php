<?php
class Token {
    public static function generate() {
        return session::put(Config::get('session/token_name'), md5(uniqid()));
    }
    public static function check($token) {
        $tokenName = Config::get('session/token_name');

        if(Session::exists($tokenName) && $token === Session::get($tokenName)) {
            session::delete($tokenName);
            return true;
        }
        return false;
    }
}