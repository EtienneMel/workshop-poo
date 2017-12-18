<?php

namespace Strings;

class Str
{
    private static $string;


    // MAGIC METHODS


    public static function __callStatic($name, $string)
    {
        self::$string = new Contenu($string, $name);
        return self::$string->getString();

    }

}
