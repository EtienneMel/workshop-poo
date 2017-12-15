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

    public static function on($string)
    {
        return new self($string);
    }

    public function replace($search, $replace)
    {
        $this->string = str_replace($search, $replace, $this->string);
        return $this;
    }

    public function majFirstLetter(){
        $this->string = ucwords($this->string);
        return $this;
    }

    public function minFirstLetter(){
        $this->string = lcfirst($this->string);
        return $this;
    }

    public function camelCase(){
            $needle = array('-', '_',);
            $this->replace($needle, ' ');
            $this->majFirstLetter();
            $this->replace(' ', '');
            $this->minFirstLetter();
            return $this;
    }

    public function toString(){
        return $this->__toString();
    }

}
