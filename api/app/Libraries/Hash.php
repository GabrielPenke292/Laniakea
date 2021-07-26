<?php
namespace App\Libraries;

class Hash{
    public static function make($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function checkPassword($enteredPassword, $dbPassword){
        if(\password_verify($enteredPassword, $dbPassword)){
            return true;
        }
        return false;
    }
}

?>