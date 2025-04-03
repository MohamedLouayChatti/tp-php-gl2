<?php

class Session{
    private static $sessionData;
    private static $visits;

    public static function init(){
        if (basename($_SERVER['SCRIPT_NAME']) !== 'index.php') {
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
        foreach($_COOKIE as $key => $val){
            setcookie($key);
        }
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/Concepts-de-base/index.php";

        header("Location: $url");
        exit();
    }
}

Session::init();

?>