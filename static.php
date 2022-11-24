<?php

class User{
    static $name = "Thuận";
    function setName($name){
        User::$name = $name;
    }
    function getName(){
        return  User::$name;
    }
}

echo User::getName();