<?php

namespace Strings;


class Contenu
{
    private $_string;
    private $_name;

    public function __construct($string)
    {
        $this->setString($this->textMinuscules($string));
    }

    public function attribution($name){

        $this->setName($name);

        if($this->_name === 'camelCase' ||$this->_name === 'studlyCase' || $this->_name === 'titleCase')
        {
            $this->camelEtStudlyCase($this->getString());
        }
        else if($this->_name === 'snakeCase' ||$this->_name === 'slugCase' || $this->_name === 'kebabCase')
        {
            $this->snakeEtSlugCase($this->getString());
        }

    }
    //SETTERS & GETTERS

    public function getString()
    {
        return $this->_string;
    }

    public function setString($string)
    {
        $this->_string = $string;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    //FONCTION MODIF DE CASSE

    public function camelEtStudlyCase($string)
    {
        $needle = array('-', '_',);

        $string = $this->replace($needle, ' ', $string);
        $string = $this->majFirstLetter($string);
        $string = $this->replace(' ', '', $string);

        if($this->_name === 'camelCase')
            {
                $string = $this->minFirstLetter($string);
            }
        $this->setString($string);
    }


    public function snakeEtSlugCase($string)
    {
        $pattern = '/(.)(?=[A-Z])/';
        $replacement = '$1 ';

        $pattern2 = '/(.)\\1+(?!\\1)/';
        $replacement2 = '$1';

        $needle = array(' ', '-','_');

        if($this->_name === 'snakeCase')
        {
            $needle2 = '_';
        }
        else if($this->_name === 'slugCase' ||$this->_name === 'kebabCase')
        {
            $needle2 = '-';
        }

        $string = $this->replacePattern($pattern, $replacement, $string);
        $string = $this->replace($needle, ' ', $string);
        $string = $this->replacePattern($pattern2, $replacement2, $string);
        $string = $this->replace(' ', $needle2, $string);
        $string = $this->textMinuscules($string);

        $this->setString($string);

    }

    //Transformation

    public function replacePattern($pattern, $replacement, $string)
    {
        return preg_replace($pattern, $replacement, $string);
    }
    public function replace($search, $replace, $string)
    {
        return str_replace($search, $replace, $string);
    }

    public function majFirstLetter($string)
    {
        return ucwords($string);
    }

    public function minFirstLetter($string)
    {
        return lcfirst($string);
    }
    public function textMinuscules($string)
    {
        return strtolower($string);
    }
}
