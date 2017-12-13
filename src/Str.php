<?php

namespace Strings;

class Str
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function __toString()
    {
        return $this->string;
    }

    public static function on($string){
        return new self($string);
    }

    public function replace($search, $replace){
        $this->string = str_replace($search, $replace, $this->string);

        return $this;
    }

    public function majFirstLetter($string){
        $this->string = ucwords($string);
        return $this;
    }

    public function minFirstLetter($string){
        $this->string = lcfirst($string);
        return $this;
    }
}
