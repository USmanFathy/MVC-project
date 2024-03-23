<?php

namespace Mvc\Mvc\Support;

class Hash
{

    public static function make($password):string{
        return password_hash($password, PASSWORD_BCRYPT);
    }
    public static function verify($value , $hashedValue):bool{
        return password_verify($value, $hashedValue);
    }
}