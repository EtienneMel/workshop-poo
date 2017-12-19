<?php

namespace Strings;

class Str
{
    private $modificateur;
    private $string;

    // MAGIC METHODS

    public function __construct($string)
    {
        $this->string = $string;
        $this->modificateur = new Contenu($string);
    }

    public static function on($string)
    {
        return new self($string);

    }

    public function __call($name, $arguments)
    {
        $this->modificateur->attribution($name);
        return $this->modificateur->getString();
    }

    public function __toString()
    {
        return $this->string;
    }
}
