<?php
/**
 * Created by PhpStorm.
 * User: etiennemela
 * Date: 15/12/2017
 * Time: 14:07
 */

namespace Strings;


class Contenu
{
    private $_string;
    private $_name;

    public function __construct($string, $name)
    {
        $this->setName($name);

        if($this->_name == 'toCamelCase')
        {
            $this->setString($this->camelCase($string[0]));
        }
        if($this->_name == 'toSnakeCase' || $this->_name == 'toSlugCase')
        {
        $this->setString($this->snakeEtSlugCase($string[0]));
        }

    }

    //SETTER & GETTERS
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

    public function setName($name): void
    {
        $this->_name = $name;
    }

    //FONCTION MODIF DE CASSE

    public function camelCase($string)
    {
        $needle = array('-', '_',);

        $string = $this->replace($needle, ' ', $string);
        $string = $this->majFirstLetter($string);
        $string = $this->replace(' ', '_', $string);
        $string = $this->minFirstLetter($string);

        return $string;

    }

    public function snakeEtSlugCase($string)
    {
        $pattern = '/(.)(?=[A-Z])/';
        $replacement = '$1_';

        $string = $this->replace(' ', '', $string);
        $string = $this->replacePattern($pattern, $replacement, $string);

        if($this->_name === 'toSnakeCase'){
            $string = $this->replace('-', '_', $string);
        }else{
            $string = $this->replace('_', '-', $string);
        }

        $string = $this->textMinuscules($string);

        return $string;

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
