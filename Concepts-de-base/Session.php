<?php

class Session{
    private static $sessionData;
    private static $visits;

    public static function init(){
        if ($_SERVER['REQUEST_URI'] === '/favicon.ico') {
            //En cas de 2 requetes
            return;
        }
        if(isset($_COOKIE["nbVisits"])){
            self::$visits = $_COOKIE["nbVisits"];
            self::$visits += 1; 
            setcookie("nbVisits", self::$visits);
        }else{
            self::$visits = 1;
            setcookie("nbVisits", self::$visits);
        }
        foreach($_COOKIE as $key => $val){
            self::$sessionData[$key] = $val;
        }

    }

    public static function addData($key, $val){
        self::$sessionData[$key] = $val;
        setcookie($key, $val);
    }
    
    public static function getData($key){
        return self::$sessionData[$key];
    }

    public static function getVisits(){
        return self::$visits;
    }

    public static function reset(){
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
}

?>