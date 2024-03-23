<?php

namespace Mvc\Mvc\Support;

class Arr
{
    public static function only(array $array , array|string $keys):array
    {
        return array_intersect_key($array, array_flip((array) $keys));
    }
    public static function exists(string $key,array $array):bool{
        if($array instanceof \ArrayAccess){
            return  $array->offsetExists($key);
        }
        return array_key_exists($key,$array);
    }
    public function last(array $array): string|int|null
    {
        return end($array);
    }
}