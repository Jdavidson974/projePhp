<?php

class LogoutController{
    public static function index(){
        session_destroy();
        header('Location: /');
    }
}

?>